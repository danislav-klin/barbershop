@extends('layouts.app')

@section('title', 'blog')

@section('content')

<h1 class="text-center mt-5 mb-5">Статьи</h1>

<nav>
    <div class="nav justify-content-center bg-dark" id="nav-tab" role="tablist">
      <button class="nav-link link-light m-4 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">мужские стрижки</button>
      <button class="nav-link link-light m-4" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">борода и усы</button>
      <button class="nav-link link-light m-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">уход за волосами</button>
      <button class="nav-link link-light m-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">мужской стиль</button>
      <button class="nav-link link-light m-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">для детей</button>
      <button class="nav-link link-light m-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact3" type="button" role="tab" aria-controls="nav-contact3" aria-selected="false">прически спортменов</button>
      
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_1.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Топ-10 модных мужских стрижек на сезон</h4>
                            </a>
                            <p>В этой статье мы представляем топ-10 самых модных и стильных мужских стрижек на текущий сезон! От классических вариантов до смелых экспериментов - каждый мужчина найдет здесь вдохновение для обновления своего образа. Узнайте, какие стрижки пользуются популярностью среди мировых звезд и какие техники и стили лидируют в этом сезоне. Готовьтесь к тому, чтобы подчеркнуть свою индивидуальность и стать обладателем модного образа с помощью одной из этих топ-10 стрижек!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_3.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Как выбрать идеальную стрижку для мужчины: советы от стилистов</h4>
                            </a>
                            <p>Хотите узнать, как выбрать идеальную стрижку для мужчины? В этой статье ведущие стилисты делятся советами и рекомендациями по подбору стрижки, которая идеально подойдет именно вам. Узнайте, как учитывать форму лица, тип волос и индивидуальные особенности при выборе стрижки, чтобы создать стильный и гармоничный образ. Не упустите возможность выглядеть модно и ухоженно - следуйте советам профессионалов и обретите свою идеальную стрижку!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_10.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Эволюция мужских стрижек: от классики к современным трендам</h4>
                            </a>
                            <p>От классических причесок до современных трендов: это увлекательное исследование расскажет вам о эволюции мужских стрижек. Изучите изменения в трендах стрижек на протяжении времени - от уважаемых классических образов до смелых и современных стилей, которые покорили мир моды. Познакомьтесь с ключевыми этапами развития мужских стрижек, узнайте, как менялись предпочтения и вкусы мужчин в области стайлинга в течение десятилетий. Погрузитесь в увлекательный мир мужской моды и откройте для себя, как стрижка может стать неотъемлемой частью вашего стиля и индивидуальности!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_11.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>История и символика бороды и усов в разных культурах</h4>
                            </a>
                            <p>Эта статья исследует эволюцию стиля бороды и усов от древних времен до современности, обращая особое внимание на символическое значение, которое эти элементы имеют в различных культурах. Рассматриваются различные культурные подходы к уходу за бородой и усами, их роль в мужской и женской идентичности, а также влияние моды и трендов на их восприятие. Статья предоставляет увлекательный обзор истории этих элементов стиля, подкрепленный культурными и историческими фактами....</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_5.jpeg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Борода и усы: искусство мужского стайлинга</h4>
                            </a>
                            <p>Этот текст знакомит читателя с миром мужского стайлинга через призму бороды и усов. Он обсуждает различные стили бороды и усов, которые существуют в современном обществе, их влияние на внешний вид и характер человека. Разбираются специфические техники и методы ухода за бородой и усами, чтобы выглядеть стильно и ухоженно. Текст также затрагивает важность выбора подходящего стиля в соответствии с индивидуальными особенностями лица и стилем жизни.</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_12.jpeg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Эволюция стиля: история бороды и усов в мужской моде</h4>
                            </a>
                            <p>Статья "Эволюция стиля" представляет исторический обзор трансформации бороды и усов в мужской моде от древности до современности. Читатель узнает, как эти элементы стиля менялись под воздействием культурных тенденций, социальных норм и индивидуальных предпочтений. Статья рассматривает эстетическое воздействие бороды и усов на облик мужчины, а также их символическое значение в различных эпохах. Погружаясь в историю стиля, читатель сможет лучше понять современные тенденции и выбрать свой уникальный облик....</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_7.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>секреты стильного и ухоженного образа</h4>
                            </a>
                            <p>В данном тексте вы найдете исчерпывающий гид по созданию стильного и ухоженного образа. От ухода за кожей и волосами до выбора подходящей одежды и аксессуаров - здесь раскрываются секреты, которые помогут выглядеть безупречно в любой ситуации. Независимо от вашего стиля или типа внешности, эти советы помогут подчеркнуть вашу индивидуальность и привлекут восхищенные взгляды окружающих. </p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_8.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>10 простых шагов для здоровых волос</h4>
                            </a>
                            <p>Новый сезон приносит с собой свежие идеи для мужских стрижек, которые не оставят равнодушными стильных мужчин...Этот текст представляет собой исчерпывающий план по ухаживанию за волосами для их здоровья и красоты. В нем вы найдете десять простых, но эффективных шагов, которые помогут вам достичь блестящих и крепких волос. От правильного питания и выбора уходовых средств до рекомендаций по стайлингу и минимизации повреждений - эти советы станут вашим надежным руководством к здоровым и привлекательным волосам.</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_4.png" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>уход за мужскими локонами</h4>
                            </a>
                            <p>Этот текст предлагает простой и практичный план по уходу за волосами у мужчин, позволяющий сохранить их здоровье и стиль. В нем содержатся рекомендации по выбору подходящих шампуней и кондиционеров, советы по укладке и уходу за волосами, а также рекомендации о здоровом образе жизни для поддержания красивых локонов. Независимо от типа волос и привычек ухода, эти советы помогут мужчинам сохранить здоровые и стильные волосы. </p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_13.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Тренды в мужской моде 2024: что носить сезону осень-зима</h4>
                            </a>
                            <p>Узнайте о самых горячих трендах в мужской моде на сезон осень-зима 2024! Статья предлагает подробный обзор ключевых элементов гардероба, которые помогут вам выглядеть стильно и со вкусом в холодное время года. От классических пальто и джемперов до акцентов в виде ярких аксессуаров — всё, что нужно для того, чтобы быть в тренде и подчеркнуть свою индивидуальность. Подготовьтесь к сезону с легкостью и уверенностью в своем стиле!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_14.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Как выглядеть стильно и уверенно каждый день</h4>
                            </a>
                            <p>Хотите узнать секреты успешного образа? Эта статья предлагает практические советы и рекомендации по тому, как подчеркнуть свою индивидуальность и выглядеть стильно в любой ситуации. От выбора базовых элементов гардероба до осознанного подхода к сочетанию цветов и текстур — здесь вы найдете все необходимое для того, чтобы производить впечатление своим образом каждый день. Подчеркните свою уверенность и стиль с легкостью!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_15.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Основные элементы, которые должны быть в шкафу каждого мужчины</h4>
                            </a>
                            <p>Эта статья исследует неотъемлемые элементы мужского гардероба, которые помогут создать стильный и универсальный образ для любого случая. От классических брюк и пиджаков до базовых футболок и джинсов — здесь вы найдете список ключевых вещей, которые помогут вам выглядеть стильно и ухоженно каждый день. Узнайте, как правильно сочетать элементы одежды, чтобы создать гармоничный образ с минимумом усилий. Подчеркните свою уверенность с помощью основных элементов стильного гардероба!</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_16.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Детская стрижка в барбершопе: советы и рекомендации</h4>
                            </a>
                            <p>Статья предлагает полезные советы для родителей, которые хотят, чтобы процесс стрижки стал приятным и безопасным для их детей. В статье рассматриваются основные аспекты выбора стиля стрижки подходящего именно для вашего ребенка, подготовки к походу в барбершоп, а также обеспечения комфортной атмосферы во время стрижки.</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_17.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Секреты успешной детской стрижки</h4>
                            </a>
                            <p>Статья раскрывает важные аспекты процесса стрижки детей, делая его приятным и эффективным как для малышей, так и для родителей. В статье вы найдете полезные советы и секреты от профессионалов по уходу за детскими волосами, выбору стиля стрижки и обеспечению комфортной атмосферы во время посещения салона....</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_18.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Детская стрижка в барбершопе</h4>
                            </a>
                            <p>Статья предлагает увлекательный взгляд на процесс стрижки детей в стиле барбершопа. Родители найдут здесь полезные советы по выбору лучшего барбершопа для своего ребенка и как сделать процесс стрижки приятным и безопасным....</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <div class="container mt-4">
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_19.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Иконические прически спортсменов: их влияние на культуру и стиль</h4>
                            </a>
                            <p>Иконические прически спортсменов имеют огромное влияние на культуру и стиль не только в спорте, но и за его пределами. Этот текст исследует, как выбранные ими прически становятся символами их личности и успеха, а также как они влияют на восприятие спортсменов обществом. От знаменитых макарен среди футболистов до известных наборов косичек у баскетболистов, иконические прически становятся частью легенды каждого спортсмена. В этом тексте будет рассмотрено, какие факторы влияют на выбор прически спортсменами, каким образом они сами комментируют свои образы и какие тенденции они задают в мире стиля и красоты...</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_20.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Топ-10 самых запоминающихся причесок спортсменов в истории</h4>
                            </a>
                            <p>Этот текст представляет топ-10 самых запоминающихся причесок спортсменов в истории. Он охватывает различные виды спорта и эпохи, показывая, как прически спортсменов могут стать их фирменным знаком и частью образа. От знаменитого кудрявого стиля Марии Шараповой до выразительного нагрудного плетения Криштиану Роналду, эти прически не только отражают индивидуальность спортсменов, но и оставляют след в памяти болельщиков и поклонников моды. Текст исследует влияние этих причесок на культуру и стиль, подчеркивая их значение в мире спорта и красоты...</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <a href="">
                            <img src="/public/img/title_21.jpg" class="card-img-top" alt="image">
                        </a>
                        <div class="card-body">
                            <a href="" class="link_blog">
                                <h4>Творческий подход к прическам: как спортсмены выражают свою индивидуальность через внешний вид</h4>
                            </a>
                            <p>Этот текст исследует творческий подход спортсменов к прическам как способ выражения индивидуальности через внешний вид. Он освещает, как спортсмены используют свои уникальные прически для того, чтобы подчеркнуть свою личность, стилизовать образ и создать узнаваемый имидж. От ярких окрасов и уникальных стрижек до креативных плетений и аксессуаров в волосах, спортсмены демонстрируют свою индивидуальность и стиль через разнообразные варианты причесок. Текст раскрывает, какие послания и эмоции могут нести на себе прически спортсменов, а также как они влияют на их образ и восприятие со стороны публики....</p>
                        </div>
                        <div class="card-body">
                            <div>
                                Автор: Слава Зиновьев
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
    
  </div>

@endsection