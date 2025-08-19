import Videos from "./Videos";

function Lesson(props) {
    console.log(props);
    const prevStep = parseInt(props.videoStep)-1;
    const nextStep = parseInt(props.videoStep)+1;
    const videoNames = JSON.parse(props.videoNames);
    return ( <>
        <div>
        <div className="rowadaptiv_с">
            <div className="column_с">
                <div className="topblock_c">
                    <div className="toptext_c">
                        <div className="buttonblock_c"><a href="/profile" className="button_c button1_c">Содержание программы</a></div>
                        <div className="buttonblock_c"><a href={'/lesson/'+ props.courseId + prevStep}  className="button_c button2_c">К предыдущему</a></div>
                        <div className="buttonblock_c"><a href={'/lesson/'+ props.courseId + nextStep}  className="button_c button3_c">К следующему</a></div>
                    </div>
                    <div className="name_c">Физика</div>
                </div>
                <div className="videoblock_c">
                    <div className="videotext_c">Урок {props.videoStep}. {props.name}</div>
                    <div ><iframe className="video_c" src={props.link} frameBorder="0" allow="clipboard-write" webkitAllowFullScreen mozallowfullscreen allowFullScreen loading="lazy"></iframe></div>
                    <div>
                        <div className="commenttext_c">Написать вопрос преподавателю:</div>
                        <div className="text-field_c">
                            <input className="text-field__input_c" type="text" name="login" id="login" placeholder="Ваш вопрос" value=""></input>
                        </div>
                    </div>
                    <div className="name2_c">Физика (лекции)</div>
                </div>
                <div className="content_c">
                    <div className="contentname_c">Содержание программы</div>
                    <Videos videoNames={videoNames} courseId={props.courseId}/>
                </div>
            </div>
            <div className="addition_c">
                <div className="addition1_c">Материалы</div>
                <div ><a className="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div ><a className="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div ><a className="addition2_c" href="#">Ссылка на учебные материалы</a></div>
                <div className="addition3_c">Преподаватель</div>
                <div className="addition4_c">Ганиев Илья</div>
            </div>
        </div>
    </div>    
    </> );
}

export default Lesson;