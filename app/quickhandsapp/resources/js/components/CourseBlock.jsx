import { useEffect } from "react";
import StepsBlock from "./StepsBlock";

function CourseBlock({coursesInfo, stepNumbers}) {
    stepNumbers = JSON.parse(stepNumbers);
    const courses = JSON.parse(coursesInfo);
    const arrOfCourses = []
    for (let i = 0; i < courses.length; i++) {
        const arr =courses[i];
        const courseId = arr[0];
        const name = arr[1];
        const lore = arr[2];
        const steps = JSON.parse(arr[3]);
        const newArr = [courseId, name, lore, steps]
        arrOfCourses.push(newArr)
    
    }
    let id =0;
    const listCourses = arrOfCourses.map((course)=>
        <a href={"/lesson/" + course[0]+stepNumbers[course[0]]}>
        <div className="course-block" id={course[0]}>
        <h2 className="title">{course[1]}</h2>
        <p className="description">{course[2]}</p>
        <div className="progress-container" id="scrollPlace">
            <div className="progress-bar">
                <StepsBlock steps={course[3]} stepNumber={stepNumbers[course[0]]} courseId={id++}/>
            </div>
        </div>
    </div>
    </a>)
    return <div>{listCourses}</div>;
    
    // return(<>hello</>);
    // return ( 
    // <div className="course-block">
    //     <h2 className="title">Физика: ЕГЭ</h2>
    //     <p className="description">Эффективная и интересная подготовка к ЕГЭ по физике</p>
    //     <div className="progress-container" id="scrollPlace">
    //         <div className="progress-bar">
    //             <ul className="steps">
    //                 <li className="step completed"><span></span><small>Кинематика</small></li>
    //                 <li className="step completed"><span></span><small>Динамика</small></li>
    //                 <li className="step completed"><span></span><small>Статика</small></li>
    //                 <li className="step completed"><span></span><small>Панорама</small></li>
    //                 <li className="step completed"><span></span><small>Окно</small></li>
    //                 <li className="step completed"><span></span><small>Балкон</small></li>
    //                 <li className="step completed"><span></span><small>Фасад</small></li>
    //                 <li className="step completed"><span></span><small>Смотровая площадка</small></li>
    //                 <li className="step completed"><span></span><small>Сисли</small></li>
    //                 <li className="step completed"><span></span><small>Элвис Пресли</small></li>
    //                 <li className="step current"><span></span><small>Джек Дениелс</small></li>
    //                 <li className="step remaining"><span></span><small>Френсис Порт Копула</small></li>
    //                 <li className="step remaining"><span></span><small>Опера</small></li>
    //                 <li className="step remaining"><span></span><small>Хор</small></li>
    //                 <li className="step remaining"><span></span><small>Nenja-or</small></li>
    //                 <li className="step remaining"><span></span><small>Винзавод</small></li>
    //                 <li className="step remaining"><span></span><small>Новый год</small></li>
    //                 <li className="step remaining"><span></span><small>Работа с сетью</small></li>
    //                 <li className="step remaining"><span></span><small>Тестирование</small></li>
    //                 <li className="step remaining"><span></span><small>Проектирование ПО</small></li>
    //                 <li></li>
    //             </ul>
    //         </div>
    //     </div>
    // </div>
    //  );
}

export default CourseBlock;