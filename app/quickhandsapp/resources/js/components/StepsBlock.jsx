import { useEffect } from "react";

function StepsBlock({steps, stepNumber, courseId}) {
    useEffect(()=>{
        console.log(document.querySelectorAll('.steps'));
        const el = document.querySelectorAll('.steps')[courseId];
        const els = el.childNodes;
        for (let i = 0; i < steps.length; i++) {
            if (i<stepNumber-1){
                els[i].classList.remove('remaining')
                els[i].classList.add('completed')
            } else if (i==stepNumber-1){
                els[i].classList.remove('remaining')
                els[i].classList.add('current')
            }
        }
        const completed = stepNumber;
        const targetElement = document.getElementById('scrollPlace');
        targetElement.scrollLeft = 150*(completed-3);
    })
    let id = 0;
    const stepsItems = steps.map((step)=><li className="step remaining" id={id++}><span></span><small>{step}</small></li>)
    stepsItems.push(<li></li>)
    return ( 
        <ul className="steps">{stepsItems}</ul>
     );
}

export default StepsBlock;