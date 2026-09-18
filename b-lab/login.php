<?php
$pageTitle = "Log In | B-Lab";
$pageDescription = "Log in to BIID Innovation Lab.";
$activePage = "";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="login-shell">
  <div class="card login-card">
    <div class="login-mark"><i class="ti ti-login-2"></i></div>
    <h1>Log In</h1>
    <p class="sub">Access your B-Lab account.</p>
    <form>
      <div class="form-group"><label for="username">Username *</label><input class="field" type="text" id="username" required></div>
      <div class="form-group"><label for="password">User Password *</label><input class="field" type="password" id="password" required></div>
      <div class="role-options">
        <label><input type="radio" name="role" value="entrepreneurs"> Entrepreneurs</label>
        <label><input type="radio" name="role" value="investors"> Investors</label>
      </div>
      <button type="submit" class="btn btn-green" style="width:100%"><i class="ti ti-login-2"></i> Log In</button>
    </form>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
