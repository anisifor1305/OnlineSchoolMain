function Videos(props) {
    let id =1;
    const listVideos = props.videoNames.map((name)=>
           <a className="vbuttonblock_c" id={id} href={'/lesson/'+ props.courseId + id}>
                <div className="vbutton_c">
                    <div>
                        <img className="vbimage_c" src="/images/bannerstyle/bg.png" alt=""></img>
                        <img className="eye_c" src="/images/weye.png" alt=""></img>
                        <div className="checked_c">Просмотрено</div>
                        <img className="play_c" src="/images/play.png" alt=""></img>
                    </div>
                    <div className="lessonnumber_c">Урок {id++}</div>
                    <div className="lessonname_c"> {name} </div>
                </div>
            </a>
    )
return <div className="row_с">{listVideos}</div>;
    // return ( 
    //     <>
    //        <a className="vbuttonblock_c" href="#">
    //             <div className="vbutton_c">
    //                 <div>
    //                     <img className="vbimage_c" src="./images/bannerstyle/bg.png" alt=""></img>
    //                     <img className="eye_c" src="./images/weye (2).png" alt=""></img>
    //                     <div className="checked_c">Просмотрено</div>
    //                     <img className="play_c" src="./images/play (1).png" alt=""></img>
    //                 </div>
    //                 <div className="lessonnumber_c">Урок 1</div>
    //                 <div className="lessonname_c">Знакомство с механикой</div>
    //             </div>
    //         </a>
    //     </>
    //  );
}

export default Videos;