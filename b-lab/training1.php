<?php
$pageTitle = "Training Schedule | B-Lab";
$pageDescription = "View the B-Lab training schedule.";
$activePage = "";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="page-hero"><div class="container"><div class="page-kicker"><i class="ti ti-school"></i> Capacity Development</div><h1>Training Schedule</h1><p>View the training sessions currently listed on the B-Lab website.</p></div></section>
<section class="section section-alt">
  <div class="container">
    <div class="card schedule-card">
      <div class="table-wrap">
        <table class="data-table">
          <thead><tr><th>Title</th><th>Date</th><th>Time</th><th>Fee</th><th>Remark</th></tr></thead>
          <tbody>
            <tr><td>Income Tax Training</td><td>17-05-2025, Saturday</td><td>10:00 AM - 5:00 PM</td><td>BDT 700</td><td><button class="btn btn-outline btn-small" type="button">Enroll</button></td></tr>
            <tr><td>QC Training</td><td>21-05-2025, Wednesday</td><td>11:00 AM - 5:00 PM</td><td>BDT 500</td><td><button class="btn btn-outline btn-small" type="button">Enroll</button></td></tr>
            <tr><td>Food Safety Training</td><td>22-05-2025, Thursday</td><td>10:00 AM - 5:00 PM</td><td>BDT 750</td><td><button class="btn btn-outline btn-small" type="button">Enroll</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
