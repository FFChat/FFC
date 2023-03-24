<div class="container-fluid">
  <div class="row">
    <section class="chat px-0">
      <div class="input-chat py-3 px-4 classic-div">
        <div class="input-group">
          <input type="text" class="form-control chat-text-input" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn button-send" type="button" id="button-send"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
      </div>
      <ul id="message-space" class="">
        <?php
        foreach ($messages as $key => $message) {
        include('../templates/message.php');
        }
        ?>
      </ul>
    </section>
  </div>
</div>