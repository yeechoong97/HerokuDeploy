<div id ="chat-enter" class="lightbox" style="display:none">
            <div class="modal-content modal adjusted-chat-height">
                <div class="modal-header">
                    <div class="modal-title">Chat</div>
                    <span aria-hidden="true" class="close" aria-label="Close" onclick="closeChatBox('chat-enter')">&times;</span>
                </div>
                <div class="modal-body remove-padding">
                    <div class="form-group1 mx-auto">
                        <label for="name">Name:</label>
                        <input class="form-control" type="text" id="userName" />
                    </div>
                    <div class="form-group1 mx-auto">
                        <label for="name">Room:</label>
                        <select class="form-control" id="roomValue">
                            <option value="Alpha">Alpha</option>
                            <option value="Beta">Beta</option>
                            <option value="Charlie">Charlie</option>
                            <option value="Delta">Delta</option>
                        </select>
                    </div>
                    <div class="chat-name-error" id="chat-error-msg"></div>
                    <div class="form-group" id="lev-btn-div" >
                        <a href="#" id="join-btn"class="form-control btn-primary col-md-5 mx-auto" onclick="enterRoom()">Join</a>
                    </div>
            </div>
        </div>
</div>