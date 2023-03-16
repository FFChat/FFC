

<li class="general-chat d-flex flex-row border-white border-top p-2 mx-3">
  <img src="images/img_util/<?= $message['user_id'] ?>.png" id='<?= $message['user_id'] ?>_img' width="32" height="32" class="rounded me-2" alt="image utilisateur">
  <div>
    <label for="<?= $message['user_id'] ?>_img" class="pb-2 text-white-50"><?= $message['nickname'] ?></label>
    <p><?= $message['text'] ?></p>
  </div>
</li>