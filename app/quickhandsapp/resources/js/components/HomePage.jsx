function HomePage() {
    return ( 
        <>

    {/* <p>Ваш баланс: { balance }</p> */}


    <banner class="style1">
        <div class="photoplace">
            <img class="image-iliya" src="./images/bannerstyle/iliya2.jpg" alt=""></img>
            <div class="resistordiv"><img class="image resistor" src="./images/bannerstyle/resistor.png" alt=""></img></div>
            <div class="lightdiv"><img class="image light" src="./images/bannerstyle/light.png" alt=""></img></div>
            <div class="balldiv"><img class="image ball" src="./images/bannerstyle/ball.png" alt=""></img></div>
            <div class="geardiv"><img class="image gear" src="./images/bannerstyle/gear.png" alt=""></img></div>
        </div>
        <div class="cardplace">
            <div class="banner-text-main">Подготовка к ЕГЭ <br></br> с Ильёй Ганиевым!</div>
            <div class="lit-banner-text">Обучаем даже с нуля!</div> 
            <div><button  class="button">Записаться</button></div>
        </div>
    </banner>


    <section id="hero-section" class="hero">
        <div class="container maincont">
            <div class="maintitle">
                <h2 class="maintext mainhead">Люто продающий заголовок.</h2>
            </div>
            <div class="info">
                <div class="maintext plottext">Здравствуйте! Меня зовут Илья. Я готовлю к ЕГЭ по физике так, что вы полюбите этот предмет.</div>
                <div ><iframe class="prevideo" src="https://rutube.ru/play/embed/fd58389c7fd15e5044f0213340c08ab1/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                <div class="cardblock">
                    <div class="cardinfo">
                        <div>
                            <h2 class="cardhead">Как проходят занятия?</h2>
                        </div>
                        <div class="cardtext">
                            Обучение проходит на этой платформе. Вы сможете с легкостью отслеживать свой прогресс. Это даст вам возможность не волноваться и не думать, что вы не успеваете. 
                            Если стоит поднажать - наши алгоритмы вам это подскажут.
                            За один учебный год мы методично пройдём все темы, необходимые для успешной сдачи ЕГЭ. 
                    После освоения материала вы закрепите его выполнением заданий из банка ЕГЭ. Мы проверяем не только ответ, мы проверяем соответствие решения критериям.
                        </div>
                    </div>
                    <div class="imgplace"><img class='cardphoto' src="images/card_photo_1.png" alt="маятник"></img></div>
                </div>
                <div class="cardblock">
                    <div class="imgplace"><img class='cardphoto' src="images/card_photo_1.png" alt="маятник"></img></div>
                    <div class="cardinfo">
                        <div>
                            <h2 class="cardhead">Плюсы подготовки со мной:</h2>
                        </div>
                        <div class="cardtext__ol">
                            <div class="list__el"> <img class='card__dot' src="images/dot.svg" alt="dot"></img>Тщательная проверка по критериям, исправление недочётов</div>
                            <div class="list__el"><img class='card__dot' src="images/dot.svg" alt="dot"></img>План подготовки, благодаря которому не надо волноваться</div>
                            <div class="list__el"><img class='card__dot' src="images/dot.svg" alt="dot"></img>Интересная подача информации, а не тупое нарешивание заданий.</div>
                            <div class="btnplace"><button  class="button_small">Вперёд!</button></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="rights">&copy; DENIS 2025. Все права пока что не защищены.</p>
            <div class="footer__column">
                <div class="footer__secure">Политика конфиденциальности</div>
                <div class="footer__secure">FAQ</div>
            </div>
        </div>
    </footer>

        </>
     );
}

export default HomePage;