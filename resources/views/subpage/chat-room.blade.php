
<div class="container py-2 chat-container" id="chat-box-container" style="display:none">
<div class="row rounded-lg overflow-hidden shadow" id="chat-box-drag">
<!-- Users box-->
<div class="chat-header">
    <h5 id="roomName"></h5>
</div>
<div class="col-3 px-0">
    <div class="bg-white">
    <div class="bg-gray px-4 pt-2 bg-light leave-border">
        <a href="#" id="join-btn"class="form-control btn-danger col-md-10 mx-auto text-center" onclick="validateLeaveRoom()">Leave</a>
        <span class="text-center small px-3 pt-2 text-muted" id="user_number"></span>
    </div>

    <div class="messages-box" style="height:392px">
        <div class="list-group rounded-0" id="participant-list">
        </div>
    </div>
    </div>
</div>
<!-- Chat Box-->
<div class="col-9 px-0">
    <div class="px-4 py-5 chat-box bg-white" id="chat-message" style="height:414px">
</div>

    <!-- Typing area -->
    <form action="#" class="bg-light" id="chat-form">
    <div class="input-group" style="height:44px;">
        <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light" id="chat_msg">
        <div class="input-group-append">
            <button id="button-addon2"  class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
        </div>
    </div>
    </form>
</div>
</div>
</div>

