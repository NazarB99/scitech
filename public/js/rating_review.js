if ( jQuery("#penci_rateyo_reivew").length ) {
    var $this 	= jQuery("#penci_rateyo_reivew"),
        rate 	= parseFloat( $this.data('rate') ),
        allow 	= $this.data('allow'),
        total 	= $this.data('total'),
        people_numb = parseInt( $this.data('people') );

    $this.rateYo({
        rating: rate,
        fullStar: true,
        starWidth: "14px",
        spacing: "3px",
        onSet: function ( rating, rateYoInstance ) {
            jQuery(this).rateYo("option", "readOnly", true);
            var postid = jQuery(this).data('postid');

            jQuery.ajax({
                type: "POST",
                url: PENCI.ajaxUrl,
                dataType: 'html',
                data: { action: 'penci_pennews_rateyo_reivew', nonce: PENCI.nonce, postid: postid, rating: rating },
                success: function( response ) {
                    var parent = jQuery(this).closest( '.penci-review-text' ),
                        new_rate = ( total + rating ) / ( people_numb + 1 ),
                        thisParent = $this.closest( '.penci-review-text' );

                    jQuery('.penci-rate-number', parent).html( new_rate );

                    $this.rateYo("rating", new_rate);
                    thisParent.find('.penci-rate-number').html( new_rate.toPrecision(2) );
                    thisParent.find('.penci-number-people').html( people_numb + 1 );
                    thisParent.find('.penci-text-votes').removeClass('penci-hide-text-votes');
                }
            });
        }
    });

    if ( allow == '0' ) {
        $this.rateYo("option", "readOnly", true);
    }
}