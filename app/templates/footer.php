        <script>
          const userId = <?= $_SESSION['id'] ?>;
          const nodeIP = <?= getenv('nodeIP') ?>;
          // userName = <?= $_SESSION['nickname'] ?>
        </script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
        <script src="/js/general.js"></script>
        <script src="/js/<?= $page ?>.js"></script>
      </main>
    </div>
  </div>
</body>