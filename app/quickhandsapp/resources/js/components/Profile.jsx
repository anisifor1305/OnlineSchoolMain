function Profile() {
    return ( 
        <>

    <div className="hero"> 
        <div className="container maincont inline_block ">
            <div>
                <img className="profile_icon" src="./images/profile (author).png" alt="" height="30" width="30"></img>
            </div>
            <div className="table">
                <div className="column">
                    <div className="cell">Имя</div>
                    <div className="cell">Фамилия</div>
                    <div className="cell secure"><a className="secure" href="#" >Управление безопасностью</a></div>
                    <div className="cell secure"><a className="secure" href="#" >FAQ</a></div>
                </div >
                <div className="column">
                    <div className="cell">{firstname}</div>
                    <div className="cell">{lastname}</div>
                    <div className="cell secure"><a className="secure" href="#" >Политика конфиденциальности</a></div>
                </div>
            </div>
        </div>
    </div>

    <my_course className="my_course"> 
        <div className="course">
            Мои Курсы
        </div>
      <div className="course-block">
    <h2 className="title">Физика: ЕГЭ</h2>
    <p className="description">Эффективная и интересная подготовка к ЕГЭ по физике</p>
    <div className="progress-container" id="scrollPlace">
      <div className="progress-bar">
        <ul className="steps">
          <li className="step completed"><span></span><small>Кинематика</small></li>
          <li className="step completed"><span></span><small>Динамика</small></li>
          <li className="step completed"><span></span><small>Статика</small></li>
          <li className="step completed"><span></span><small>Панорама</small></li>
          <li className="step completed"><span></span><small>Окно</small></li>
          <li className="step completed"><span></span><small>Балкон</small></li>
          <li className="step completed"><span></span><small>Фасад</small></li>
          <li className="step completed"><span></span><small>Смотровая площадка</small></li>
          <li className="step completed"><span></span><small>Сисли</small></li>
          <li className="step completed"><span></span><small>Элвис Пресли</small></li>
          <li className="step current"><span></span><small>Джек Дениелс</small></li>
          <li className="step remaining"><span></span><small>Френсис Порт Копула</small></li>
          <li className="step remaining"><span></span><small>Опера</small></li>
          <li className="step remaining"><span></span><small>Хор</small></li>
          <li className="step remaining"><span></span><small>Nenja-or</small></li>
          <li className="step remaining"><span></span><small>Винзавод</small></li>
          <li className="step remaining"><span></span><small>Новый год</small></li>
          <li className="step remaining"><span></span><small>Работа с сетью</small></li>
          <li className="step remaining"><span></span><small>Тестирование</small></li>
          <li className="step remaining"><span></span><small>Проектирование ПО</small></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
    </my_course>

    <footer className="footer">
        <div className="container">
            <p className="rights">&copy; DENIS 2025. Все права пока что не защищены.</p>
            <div className="footer__column">
                <div className="footer__secure">Политика конфиденциальности</div>
                <div className="footer__secure">FAQ</div>
            </div>
        </div>
    </footer>
        </>
     );
}

export default Profile;