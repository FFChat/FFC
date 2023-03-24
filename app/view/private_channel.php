<div class="container-fluid">
  <div class="row">
    <section class="chat px-0">
      <div class="input-chat py-3 px-4 classic-div col-md-10">
        <form onsubmit="emitMsg()">
          <div class="input-group">
            <input type="text" id="chat-text-input-id" class="form-control chat-text-input">
            <button class="btn button-send" type="submit" id="button-send"><i class="fa-solid fa-paper-plane"></i></button>
          </div>
        </form>
      </div>
      <ul id="message-space" class="pb-5">
        <?php
        foreach ($messages as $key => $message) {
        include('../templates/message.php');
        }
        ?>
      </ul>
    </section>
  </div>
</div>