import React from "react";

const Message = ({ userId, message }) => {
    return (
        <div className={`row ${
        userId === message.user_id ? "message_right" : "message_left"
        }`}>
            <div className={`row ${
        userId === message.user_id ? "msg_right" : "msg_left"
        }`}>
        <small className="text-muted">
                    <strong>{message.user.name} | </strong>
                </small>
                <small className="text-muted float-right">
                    {message.time}
                </small>
                <div className={`alert alert-${
                userId === message.user_id ? "primary" : "secondary"
                }`} role="alert">
                    {message.text}
                </div>
            </div>
        </div>
    );
};

export default Message;