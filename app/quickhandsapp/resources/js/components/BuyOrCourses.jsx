import CourseBlock from "./CourseBlock";

function BuyOrCourses({isBought, coursesInfo, stepNumbers}) {
    if(isBought){
        return(<CourseBlock coursesInfo={coursesInfo} stepNumbers={stepNumbers}/>);
    }
    else{
        return(<div className='nothingBought'>На данный момент не куплено ни одного курса.</div>);
    }
}

export default BuyOrCourses;