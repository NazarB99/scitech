<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Article::create([
            'title' => 'Хуже Нибиру: к Земле летит зловещая мертвая комета в виде черепа',
            'content' => 'К Земле приближается астероид в зловещей форме черепа, который, по сути, является мертвой кометой. Космическое тело лишилось своего ледяного «хвоста» из-за того, что слишком часто пролетало вблизи Солнца, сообщает Live Science. 
                            Не менее пугающим в его образе является то, что он почти абсолютно черного цвета: его поверхность поглощает 94% всего падающего на него света. 
                            Наиболее примечательно, что этот астероид уже пролетал мимо земли 31 октября – в знаменитый праздник Хэллоуина. Считается, что это – единственный день в году, когда души умерших могут вернуться из мира мертвых. 
                            Мертвая комета приблизится к Земле на расстояние в 38 миллионов километров, что эквивалентно около четверти дистанции от планеты до Солнца. 
                            Впервые астероид был замечен астрономами осенью 2015 года, когда он приблизился к планете на очень близкое расстояние – 486 тысяч километров. Это и позволило астрономам рассмотреть его пугающий вид, в котором четко угадываются лоб, подбородок, глазная и носовые впадины человеческого черепа. 
                            Ранее конспирологи выдвинули версию о том, что таинственная планета Нибиру столкнется с Землей в октябре и ударит по Северной Америке, попутно вызвав извержение супервулкана Йеллоустоун. ',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'Ученые заявили об обнаружении самой удаленной карликовой планеты',
            'content' => 'Астрономы обнаружили в Солнечной системе самую далекую карликовую планету. О ее обнаружении сообщается на сайте Центра малых планет Международного астрономического союза, сообщает National Geographic. 
Космический объект, обозначенный как 2015 TG387, был обнаружен на расстоянии около 80 астрономических единиц от Солнца (астрономическая единица — среднее расстояние от Земли до Солнца, около 150 млн км). Плутон находится на расстоянии около 34 астрономических единиц.
Орбита космического объекта, находящегося за Плутоном, указывает на возможность существования расположенной еще дальше от Солнца планеты X, сообщается на сайте Института Карнеги в Вашингтоне.
На возможность существования удаленной от солнца «планеты Х» исследователь Института Карнеги Скотт Шепард указывал еще в 2015 году. Ее вероятным существованием он объяснял особенности орбиты карликовой планеты Седна и некоторых других объектов.',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'Ускорители частиц могут привести к глобальной катастрофе',
            'image' => 'display: block; background-image: url(/cover_images/870x489_0x103_detail_crop_e8f2d11273123beac46eed135882a64dad1aa48046e27617940b3b1550a6e6e9.jpg);',
            'img' => '/cover_images/870x489_0x103_detail_crop_e8f2d11273123beac46eed135882a64dad1aa48046e27617940b3b1550a6e6e9.jpg',
            'content' => 'Ускорители частиц могут привести к катастрофе и сжать Землю до размеров футбольного поля. Такое утверждение высказал известный британский космолог Мартин Рис в своей новой книге On the Future: Prospects for Humanity, пишет Naked Science.
Высокоскоростные столкновения, которые происходят в Большом андронном коллайдере, помогают открыть множество новых частиц, но по мнению ученого, стоит учитывать и сопутствующие риски.
«Возможно, сформируется черная дыра, а затем она втянет в себя все, что ее окружает. Другая пугающая возможность – в том, что кварки переформируются в сжатые объекты, известные как страпельки. Само по себе это безобидно. Однако, по одной из гипотез, страпелька может трансформировать все что угодно на своем пути в новую форму материи, преображая Землю в сверхплотную сферу диаметром около ста метров», – пишет он.',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'Новые планы NASA: покорение Луны и экспедиция на Марс',
            'image' => 'display: block; background-image: url(/cover_images/8d8731f242a20a189914f7cbdb0232d0_ce_4267x2275x0x64_cropped_800x427.jpg)',
            'img' => '/cover_images/8d8731f242a20a189914f7cbdb0232d0_ce_4267x2275x0x64_cropped_800x427.jpg',
            'content' => 'Итак, NASA планирует новую посадку на Луну, организовать долговременную станцию или на самой Луне, или на ее орбите, восстановить лидерство США в космосе, укрепить частные космические компании и найти способ, как доставить американских астронавтов на Марс.
Таймлайны для каждой из этих целей расписаны в 21-страничном отчете, но тут интересно, что никаких предельно четких дат NASA не дает, а скорее придерживается мысли, что сначала надо решить первоочередные проблемы, а уж потом приступать к отправке людей куда-нибудь.
NASA собирается инкорпорировать в план то, что узнает по дороге. Любые заявления, вроде того, что уже в 2030-х года люди будут прогуливаться по Марсу, сейчас идут с определенной степенью гибкости и могут быстро измениться, если в процессе NASA наткнется на какие-то проблемы.
Например, первая корректировка планов по Марсу будет уже после миссии 2020 года, когда марсоход соберет и проанализирует образцы с марсианской поверхности, то есть еще даже до того, как начнут составлять первый черновик бюджета для экспедиции на Марс.
А в 2020 году NASA запустит 13 СubeSat на околоземную орбиту в 2020 году, чтобы подготовить будущие грузоперевозки на Луну, Марс и дальше. Эти спутники помогут NASA отправить астронавтов на лунную орбиту в 2022 году. Возможно, если все пойдет по плану, а в процессе не будет проблем.',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'В WhatsApp назревают перемены. И они вам не понравятся',
            'content' => 'В одной из ближайших версий WhatsApp пользователям будет демонстрироваться реклама. Она, вероятнее всего, появится в верхней части окна и будет мелькать среди "Историй" - коротких видео или фото, которые самоуничтожаются через сутки после публикации.

О грядущем нововведении, которое может не понравиться пользователям, стало известно от инсайдеров WABetaInfo, которые предупредили о появлении рекламы в версии приложения мессенджера для iOS.
Напомним, что WhatsApp принадлежит социальной сети Facebook, которая активно демонстрирует рекламу в лентах друзей. Кроме того, в "Историях" сервиса Instagram, которым также владеет Facebook, показывается реклама.
Количество ежедневных пользователей WhatsApp на сегодняшний день насчитывается более 450 миллионов человек. Ранее о возможном появлении рекламы в мессенджере сообщил Алекс Стамос, один из руководителей службы безопасности Facebook.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Samsung Galaxy S10 запускает любые приложения для компьютерной Windows 10',
            'image' => 'display: block; background-image: url(/cover_images/Samsung-Galaxy-S10-dex-Windows-10-5.jpg)',
            'img' => '/cover_images/Samsung-Galaxy-S10-dex-Windows-10-5.jpg',
            'content' => 'оть до официального анонса смартфона Samsung Galaxy S10 и осталось еще несколько месяцев, так как представить его публике должны в ходе выставки MWC 2019 в феврале следующего года, но уже сейчас известно о том, какие особенности он получит. Считанные часы назад, 2 октября, инсайдеры со ссылкой на официального представителя южнокорейской корпорации заявили о том, что новый флагман запускает любые приложения для компьютерной Windows 10, а делать это можно без покупки стороннего программного обеспечения.

Вместе со смартфоном Galaxy S8 компания Samsung запустила в продажу док-станцию Dex Station, вставив телефон в которую его можно превратить в некое подобие полноценного компьютера, подключив монитор, клавиатуру и мышку. Затем, спустя какое-то время, выпустили док-станцию под названием DeX Pad, которая позволяла использовать мобильное устройство в качестве трекпада для управления курсором мыши. С появлением Galaxy Note 9 и Galaxy Tab S4 необходимость в отдельном аксессуаре отпала.



Теперь можно просто подключить флагманы Samsung к монитору при помощи кабеля HDMI – USB Type-C, после чего все начнет работать автоматически. Тем не менее, компания-производитель хочет добиться еще большего. Сообщается, что в 2019 году технология DeX выйдет на новый недостижимый ранее уровень, потому как она начнет работать без проводов. Для этого, скорее всего, пользователю нужно будет вставить в разъем HDMI монитора специальный адаптер.



Затем смартфоны южнокорейской корпорации будут передавать на него картинку в режиме реального времени без задержек. На основе какой технологии подобное станет происходить – пока что неизвестно. Таким образом, обладатели Samsung Galaxy S10 смогут запускать режим полноценного компьютера без использования каких-либо проводов, но, конечно, смартфон во время такой высокой нагрузки на все техническое оснащение будет лучше поставить на зарядку, потому как разряжаться он начнет крайне быстро.



Операционная система в рамках DeX для Galaxy S10 будет содержать в себе специальный набор ПО, предназначенного для запуска Windows 10, а также всех приложений для нее, работать с которыми под силу новому флагману южнокорейской корпорации с технической точки зрения. Осталось только дождаться официальной презентации, в ходе которой Samsung гарантированно уделит крайне много внимания своей новой разработке.

Ранее появилась информация о том, что уникальный флагманский смартфон Nokia 9 PureView не имеет равных, превосходя даже Samsung Galaxy S10.

До 21 октября включительно у всех желающих есть уникальная возможность бесплатно получить спортивный браслет Xiaomi Mi Band 3, потратив на это всего 1 минуту своего личного времени.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'В браузере Google Chrome теперь можно играть в PC-игры',
            'image' => 'display: block; background-image: url(/cover_images/assassins-creed-odyssey-reveal-trailer-e3-2018_stum.@750.jpg)',
            'img' => '/cover_images/assassins-creed-odyssey-reveal-trailer-e3-2018_stum.@750.jpg',
            'content' => 'Компьютерный гейминг существенно превосходит мобильный по всем параметрам. Это совершенно иной уровень. Google является лидером рынка мобильных устройств и развлечений, поэтому не выпустить свою игровую консоль она не может. Ранее в Сети ходили слухи о выходе консоли Yeti, в основе которой ляжет стриминговая технология. Однако до выхода консоли Google, вероятно, решила протестировать технологию в браузере Chrome, пользователи которого будут довольны этой новостью.



Компания анонсировала стриминговый сервис Google Project Stream. Ограниченное количество игроков из США получат неограниченный доступ к игре Assassin’s Creed Odyssey. Данная ААА-игра является новой частью популярной серии игр Assassin’s Creed.

Почему разработчики до сих пор не реализовали нечто подобное?
Google объясняет, что причиной этому являются жесткие требования к задержке и качеству. В случае с обычными видео задержка и падения качества в динамичных сценах является нормой, тогда как в играх это недопустимо. Пользователь не должен ощущать задержек при перемещении мыши или нажатии по кнопке клавиатуры, а во время активных действий картинка должна оставаться качественной, чтобы игрок мог, например, попасть по цели, если речь идет о 3D-шутере.

Ниже представлен геймплей игры Assassin’s Creed Odyssey, запущенной с помощью стримингового сервиса Google Project Stream.
Теперь игрокам не нужно будет каждый год обновлять железо своего компьютера. Достаточно иметь Интернет-соединение со скоростью более 25 Мбит/сек.

Будущее за стриминговыми сервисами, не все проекты Google получаются успешными, но все идет именно к этому и успешность данного проекта очевидна. Необходимость в мощном ПК со временем пропадет. Это, конечно, не порадует производителей видеокарт и других PC-комплектующих, им необходимо задуматься о дальнейшей стратегии уже сейчас.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Google Chrome получил защиту «от дураков»',
            'image' => 'display: block; background-image: url(/cover_images/Google-Chrome-54.jpg)',
            'img' => '/cover_images/Google-Chrome-54.jpg',
            'content' => 'За последние несколько лет компания Google вложила много сил в браузер Chrome, улучшив его внешний вид и интерфейс, усилив безопасность и конечно же повысив скорость работы, в том числе загрузки данных. Как стало известно сегодня, 2 октября 2018 года, новая версия данного программного обеспечения содержит в себе защиту «от дураков», опробовать которую уже сейчас могут все пользователи, установив свежий билд тестовой 70-й версии браузера.

Еще летом этого года Google запретила устанавливать в браузер Chrome какие-либо расширения из автономных независимых источников, кроме магазина Chrome Store. Это ограничение, конечно, можно обойти, однако подавляющее большинство людей не имеют этого делать, на что и рассчитывает «поисковой гигант». Теперь пришло время для более решительных суровых мер, направленных на обеспечение защиты пользователей, которые совсем ничего не понимают в информационной безопасности, нарушая даже самые элементарные правила.
Сообщается, что 70-я версия браузера Google Chrome содержит в себе специальную систему разрешений для расширений, в том числе из магазина Chrome Store. Устанавливая какое-либо дополнение пользователь сможет запретить программному обеспечению получать доступ к тем или иным вещам, что сейчас делать просто невозможно. Пойти на такой шаг американская корпорация Google решила из-за многочисленных жалоб, в которых пользователи сообщают о краже у них личных данных.
Например, совсем недавно популярное расширение Stylish, установленное на миллионы компьютеров, было уличено в сборе личной информации и передачи ее третьим лицам, которые ее продавали за деньги и получали таким образом большую прибыль. Чтобы подобного более не происходило пользователи Google Chrome смогут выбрать, какое дополнение что может делать. Это позволит обеспечить защиту от кражи личной информации, безопасностью которой очень сильно пренебрегают многие интернет-пользователи.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'The developer tools you need to know right now',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'How do you tackle user research and testing?',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Movie fans will love these illustrated movie maps',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => '8 ways to use illustration in your agency projects',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '20 best iPad art apps for painting and sketching',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => '8 ways to use illustration in your agency projects',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '12 common JavaScript questions answered',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'How to use Markdown in web development',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'The ultimate guide to better service design',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '10 essential tools for freelance UX designers',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => 'The secrets of custom font development',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);

        \App\Article::create([
            'title' => '8 great business cards for UX designers',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 3
        ]);


        \App\Article::create([
            'title' => '8 ways to use illustration in your agency projects',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => '12 common JavaScript questions answered',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => 'How to use Markdown in web development',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => 'The ultimate guide to better service design',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => '10 essential tools for freelance UX designers',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => '10 incredible online art schools',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => 'The secrets of custom font development',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'category_id' => 4
        ]);
    }
}
