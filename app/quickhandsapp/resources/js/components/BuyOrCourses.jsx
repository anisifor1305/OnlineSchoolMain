import CourseBlock from "./CourseBlock";

function BuyOrCourses({isBought, coursesInfo, stepNumbers}) {
    if(isBought){
        return(<CourseBlock coursesInfo={coursesInfo} stepNumbers={stepNumbers}/>);
    }
    else{
        return(<div>Ниче не куплено, нужна соотв. страница.</div>);
    }
}

export default BuyOrCourses;