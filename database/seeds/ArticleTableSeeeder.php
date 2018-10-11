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
            'title' => 'Лес ледяных игл: чем нас встретит спутник Юпитера',
            'img' => '/cover_images/download.jpg',
            'image' => 'display: block; background-image: url(/cover_images/download.jpg)',
            'content' => 'Специалисты считают Европу одним из самых интересных объектов для исследования в Солнечной системе. У нее есть разреженная атмосфера с высоким содержанием кислорода, о под ледяной коркой планеты скрывается незамерзающий океан. Ученые выдвинули гипотезу, что подо льдами Европы может теплиться микроскопическая жизнь.
            Но космический зонд, долетевший до Европы, столкнется с неожиданными трудностями. Дэниел Хобли из Кардиффского университета и его коллеги из США утверждают, что на поверхности юпитерианского спутника растут огромные кальгаспоры — острые ледяные иглы. Они возникли из-за неравномерного таяния толстого плотного снежного покрова, и в высоту могут достигать 15 метров. Похожие структуры есть и на Земле: они обнаружены на экваториальных высокогорьях, где яркое Солнце сочетается с относительно холодным и сухим воздухом.

Если такие структуры действительно есть на поверхности планеты, они могут серьезно повредить аппараты, которые будут садиться на поверхность. Астрономы пока не могут подтвердить предположение о кальгаспорах на Европе. Съемки планеты не показывают наличие таких структур, но они могут просто-напросто рассеивать свет, оставаясь невидимыми для радаров. Косвенным подтверждением существования кальгаспор могут служить аномально низкие температуры поверхности спутника, зафиксированные зондом «Галилео»: холодные кальгаспоры могли исказить данные измерений.',
            'category_id' => 1
        ]);

        \App\Article::create([
            'title' => 'Телескопы обнаружили всплеск радиосигналов из космоса ',
            'img' => '/cover_images/10235410.358296.4541.jpg',
            'image' => 'display: block; background-image: url(/cover_images/10235410.358296.4541.jpg)',
            'content' => 'Австралийские астрономы объявили, что телескопы обнаружили огромное количество неизвестных радиосигналов, которые поступают из глубокого космоса. Подобные вспышки являются одним из самых загадочных явлений во Вселенной.
За год исследователи зафиксировали 20 радиовсплесков, мощность которых равна энергии, вырабатываемой Солнцем за 80 лет. Это число почти в два раза больше, чем количество подобных сигналов, зафиксированных с 2007 года, то есть, с момента их открытия.
Обнаружить новые вспышки ученым помогла более совершенная аппаратура. Благодаря ей стало известно, что сигналы поступают не из того района Вселенной, в котором находится наша галактика. Они преодолевают миллиарды световых лет, время от времени искажаясь, проходя через облака газа. Используя этот факт, астрономы предположили, что сигналы идут из центра Вселенной.
Ученые из Гарвардского университета выдвинули гипотезу о том, что данные вспышки являются утечками из огромных излучателей, которые на Земле используют для продвижения космических аппаратов на солнечных парусах в космосе. Другие теории включают в себя черные дыры, плотные звезды, сталкивающиеся друг с другом и даже внеземной разум.
Специалисты надеются, что фиксирование новых сигналов позволит обнаружить недостающее вещество, находящееся в пространстве между галактиками. В настоящее время астрономы работают над точным определением источника вспышек. Явления могут стать одним из способов изучения ранних этапов жизни Вселенной, пишет Independent.
Ранее News.ru писал, что ближайшая к Солнцу карликовая планета Церера изменила ось вращения. По данным планетологов из США, изменение наклона объекта происходило в несколько этапов',
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
            'title' => 'Переписку в WhatsApp удалось взломать',
            'image' => 'display: block; background-image: url(/cover_images/pic_1d89da349e9f8261b136aaf3e180a354.jpg);',
            'img' => '/cover_images/pic_1d89da349e9f8261b136aaf3e180a354.jpg',
            'content' => 'Уязвимость в мессенджере WhatsApp позволяла хакерам получить доступ к аккаунтам и переписке пользователей, когда те отвечали на входящий видеозвонок. Об этом сообщает издание The Register.

Проблема затронула пользователей iOS и Android. Уязвимость была обнаружена в конце августа. В начале октября компания Facebook, которой принадлежит WhatsApp, исправила ее. Об этом говорилось в техническом докладе, размещенном в сети.

Остается неизвестным, воспользовались ли хакеры уязвимостью до ее устранения. Агентство Reuters попросило Facebook прокомментировать эту информацию СМИ. На момент написания материала корпорация не отреагировала на запрос.

В конце сентября Facebook признала новую крупную утечку данных пользователей. В результате взлома в руках хакеров оказался доступ к 50 миллионам аккаунтов.',
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
            'title' => 'Новейшую защиту Windows 10 взломали',
            'image' => 'display: block; background-image: url(/cover_images/542294x630x0_1539237762.jpg)',
            'img' => '/cover_images/542294x630x0_1539237762.jpg',
            'content' => 'Исследователи безопасности из Fujitsu System Integration Laboratories нашли способ взломать новую систему защиты от вымогателей в Windows 10.

Самая свежая версия операционной системы содержит механизм Controlled Folder Access, который должен запрещать неизвестным программам изменять файлы в защищенных папках, пишет The Bleeping Computer.
 Однако защиту можно обойти путем видоизменения DLL. Оказалось, что Controlled Folder Access защищает важные файлы только от тех программ, которых нет в «белом списке». Поэтому для взлома вредоносную DLL внедрили в одобренное приложение.

После включения программы DLL запускается и может обойти функцию защиты. При этом брешь в системе безопасности не смогли обнаружить ни встроенный антивирус Windows Defender, ни сторонние продукты.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Sony Xperia XZ3 поступил в продажу в России по безумнейшей цене',
            'image' => 'display: block; background-image: url(/cover_images/Sony-Xperia-XZ3-2.jpg)',
            'img' => '/cover_images/Sony-Xperia-XZ3-2.jpg',
            'content' => 'Фанаты компании Sony, проживающие в России, могут наконец-то ликовать, потому как сегодня, 10 октября 2018 года, на российской территории стартовали официальные продажи нового флагманского смартфона бренда, анонсированного еще на выставке IFA в конце августа. Новинка называется Sony Xperia XZ3, а купить ее можно в официальном онлайн-маназине, розничных торговых точках партнеров и в фирменных магазинах на территории всей страны. Проблема в цене.
            Если кратно, то новый флагман японской корпорации продают по безумнейшей цене, потому как производитель оценил его в целых 69 990 рублей, то есть в крайне большую денежную сумму. При покупке данного мобильного устройства до 9 ноября 2018 года включительно, покупатель получит в подарок сертификат на 20 000 рублей, которым можно оплатить до 50% от следующий покупки под фирменным брендом компании Sony.
            В специальном предложении участвуют партнеры Sony, среди которых магазины «Связной», «Евросеть», «М.Видео», «ДНС», «Эльдорадо» и «Ноу-Хау». На выбор покупателей доступно четыре расцветки смартфона Sony Xperia XZ3, среди которых черная, серебристая, зеленая и бордовая. За почти 70 тысяч рублей покупатель получает смартфон премиум-класса, пускай и оснащенный лишь одинарной основной камерой с разрешением 19 Мп.
            Мобильное устройство может похвастаться 6-дюймовым OLED-экраном с разрешением 2880 на 1440 пикселей (QHD+), 8-ядерным процессором Qualcomm Snapdragon 845 с тактовой частотой 2,7 ГГц, графикой Adreno 630, 4 ГБ оперативной и 64 ГБ постоянной флеш-памяти, слотом для карт памяти microSD до 512 ГБ включительно, модулями Bluetooth 5.0 LE, NFC, Wi-Fi 802.11ac и 4G VoLTE, сканером отпечатков пальцев на задней крышке, 13 Мп фронтальной камерой и аккумуляторной батареей емкостью 3300 мАч с поддержкой быстрой зарядки Quick Charge 3.0.
            Габариты корпуса телефона составляют 158 x 73 x 9,9 мм, тогда как весит он 193 грамма. Имеется защита от воды и пыли по стандарту IP68, благодаря которой со смартфоном Sony Xperia XZ3 можно смело погружаться под воду на глубину до двух метров. Прямо «из коробки» на данный аппарат установлена операционная система Android Pie, что, по сути, является едва ли не единственным его реальным плюсом перед продукцией от других производителей.',
            'category_id' => 2
        ]);

        \App\Article::create([
            'title' => 'Google+ решили закрыть из-за низкой популярности и утечек',
            'image' => 'display: block; background-image: url(/cover_images/755390406473102.jpeg)',
            'img' => '/cover_images/755390406473102.jpeg',
            'content' => 'Интернет-гигант Google принял решение отказаться от проекта по развитию собственной соцсети, сообщается в официальном блоге компании. Google+ будет закрыта из-за низкой популярности и обнаруженной уязвимости, которая могла привести к масштабной утечке данных пользователей.

«Исследование показало наличие значительных сложностей на пути разработки и поддержания Google+ на том уровне, который ожидают потребители. Принимая во внимание эти сложности, а также с учетом низкой активности пользовательской версии соцсети мы приняли решение закрыть пользовательскую версию Google+», — говорится в сообщении.

В блоге Google также говорится об обнаруженной в системе уязвимости, которая позволяла сторонним приложениям получить доступ к скрытым личным данным пользователей. Ошибка в уровне конфиденциальности существовала с 2015 по 2018 год и была обнаружена и ликвидирована лишь в ходе мартовского исследования безопасности. По оценкам Google, утечка данных могла произойти из аккаунтов 500 тыс. пользователей.

Участникам соцсети будет дано время для того, чтобы перенести данные на другие платформы. Представители Google заявили, что переходный период составит десять месяцев. Окончательно пользовательская версия Google+ прекратит функционирование к августу 2019 года.

Вместе с тем полностью от развития соцсети компания не будет отказываться. Google+ может продолжить существование в виде корпоративной платформы. В рамках этой политики компания предусматривает разработку новых функций, которые могут заинтересовать бизнес-сообщество.

Соцсеть Google+ была запущена в июне 2011 года на базе сервиса Google Profiles. С 2012 года свободно регистрироваться в соцсети могут все интернет-пользователи старше 13 лет. Ранее Google уже пытался развить иной проект соцсети под названием Orkut. Однако в 2014 году эта соцсеть была закрыта из-за недостаточной популярности по сравнению с другими сервисами Google.

Подробнее на РБК:
https://www.rbc.ru/technology_and_media/09/10/2018/5bbbdf179a79472dfa20405f',
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
            'title' => 'Россиян предупредили об опасности при поездке в США',
            'image' => 'display: block; background-image: url(/cover_images/pic_7f26bab9035f0331e127cc6e1c0b2f16.jpg)',
            'img' => '/cover_images/pic_7f26bab9035f0331e127cc6e1c0b2f16.jpg',
            'content' => 'Роспотребнадзор предупредил российских туристов о вспышке инфекционного заболевания в США. Об этом сообщается на сайте ведомства.

По данным Центра по контролю и профилактике заболеваний США (Centers for Disease Control and Prevention), в штатах Кентукки и Западная Вирджиния зарегистрирован рост заболеваемости вирусным гепатитом А с августа 2018 года. Как уточняется в сообщении, вспышка инфекции обнаружена среди лиц без определенного места жительства и лиц, употребляющих наркотики.

В связи с этим Роспотребнадзор порекомендовал туристам учитывать эту информацию при планировании поездки и прививаться перед путешествием в США.',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => 'Как быстро бросить курить: электронные сигареты не выход',
            'image' => 'display: block; background-image: url(/cover_images/922046686b4d4cbbd1f2423edbefd600_ce_2048x1092x0x30_cropped_800x427.jpg)',
            'img' => '/cover_images/922046686b4d4cbbd1f2423edbefd600_ce_2048x1092x0x30_cropped_800x427.jpg',
            'content' => 'По данным национального опроса в США 2 миллиона взрослых, пользующихся электронными сигаретами, никогда не курили традиционные. Из этой группы людей около 60% составляют молодые люди в возрасте от 18 до 24 лет.

В связи с этими результатами чиновники выразили опасение, что электронные сигареты способствуют увеличению, а не сокращению числа курильщиков. Эта проблема особенно актуальна для подростков и молодых людей.

В 2016 году исследователи проанализировали данные Центра наблюдения за факторами риска и профилактики заболеваний в США. Среди 261 541 людей, определяемых как «употребившие менее 100 сигарет за всю жизнь», 1,4% сообщили о том, что они курят электронные сигареты. Если экстраполировать эти данные, то они соответствуют примерно 1,9 миллионам человек взрослого населения США. Около 1,2 миллиона из этих пользователей — молодые люди (18−24 года).

В работе исследователей подчеркивается «потенциальная необходимость регулирования продаж и сбыта электронных сигарет для защиты уязвимых групп населения, в том числе молодых людей, которые никогда не являлись курильщиками».

Поэтому есть только один действенный и надежный способ бросить курить — это бросить курить без промедлений и «симуляторов».',
            'category_id' => 4
        ]);

        \App\Article::create([
            'title' => 'Европе предрекли эпидемию чумы',
            'image' => 'display: block; background-image: url(/cover_images/1.jpg)',
            'img' => '/cover_images/1.jpg',
            'content' => 'С поистине зловещим предсказанием выступил немецкий журналист Ханнес Штайн. Он нашел немало общего между современной ситуацией в Европе и расцветом Римской империи и рассказал, как банальное изменение климата в 540 году н. э. породило одну из самых губительных болезней того времени - чуму. И, несмотря на то что сегодняшняя медицина способна справится с этим средневековым заболеванием, уже появились вирусы, которые вполне устойчивы к антибиотикам. И все это рискует обернуться эпидемией «новой чумы», такой же разрушительной, как в 540 году.

Тогда несколько лет были рекордно холодными. Их еще назвали «годы без лета». Им предшествовала активная вырубка лесом римлянами. Дерево нужно было и для обогрева, и для строительства судов и домов. Римляне называли это прогрессом, однако такой «прорыв» в итоге вышел им боком.

Леса в Северной Африке редели, все больше солнечного света просто отражалось от поверхности земли и возвращалось в космос, не нагревая планету. Помимо этого, произошла серия извержений вулканов. Планета после довольно благоприятного периода тепла снова начала остывать.

Холодные годы благотворно сказались на развитии бактерии - возбудителя чумы. Все началось с тех же блох, которые переносили вирус. А дальше люди уже сами постарались разнести его практически по всему свету.

Как пишет журналист на страницах издание Die Welt, тогда вся жизнь Римской империи концентрировалась в Констинтинополе. Через этот важный порт проходил Шелковый путь, сотни кораблей причаливали и отчаливали оттуда с ценными грузами. Поэтому распространение чумы произошло в рекордно короткие сроки.

Погибли миллионы. У человечества тогда не было лекарства от этой смертоносной инфекции, поэтому вымирали города и деревни.

Сегодня, по словам автора, мы живем в полной уверенности, что наше вмешательство в экологию планеты никак не скажется на распространении заболеваний. Однако приведенный выше пример, как полагает Штайн, должен отрезвить людей.  Сейчас же он видит две основные проблемы.

Во-первых, бактерии - возбудители различных заболеваний стали устойчивы к воздействию антибиотиков. Автор приводит пример женщины из США, которая была инфицирована, и ей не помог даже сильнейший антибиотик колистин. Его назначают, когда больше ничего не помогаето. Однако вылечить ее не удалось.

Выяснилось, что ген резистентности к колистину есть у людей и животных в Китае. Однако автор не видит пока альтернативы антибиотикам. Ведь если мы откажемся от них, то человечество окажется просто беззащитно перед многими заболеваниями, в том числе перед чумой.

Помимо этого, автор выражает недоумение в связи с позицией противников прививок. Это движение набирает популярность по всему миру. Родители отказываются делать обязательные прививки детям, апеллируя к исследованию, в котором предполагалось наличие зависимости между прививками и развитием аутизма у детей. Несмотря на то что, по информации автора, эти результаты многократно опровергались, противников прививок становится год от года больше. В итоге это приведет к тому, что иммунитет целых поколений к таким заболеваниям, как корь и коклюш, ослабнет.',
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
