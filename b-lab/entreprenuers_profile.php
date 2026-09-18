<?php
$pageTitle = "Entrepreneur Profiles | B-Lab";
$pageDescription = "Browse entrepreneur profiles listed on BIID Innovation Lab.";
$activePage = "entrepreneurs";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="page-hero"><div class="container"><div class="page-kicker"><i class="ti ti-users"></i> Entrepreneur Network</div><h1>Profile of Entrepreneurs</h1><p>Browse the entrepreneur profiles currently listed on B-Lab using the available profile criteria.</p></div></section>
<section class="section section-alt">
  <div class="container profile-layout">
    <div class="card panel">
      <div class="form-grid">
        <label for="ep-location">Location</label>
        <select id="ep-location" class="field"><option>Select Location</option><option>Lalmonirhat</option></select>
        <label for="ep-loan">Loan Range</label>
        <select id="ep-loan" class="field"><option>Select Loan Range</option><option>50000 - 100000</option><option>100000 - 250000</option><option>250000 - 400000</option><option>400000 - 600000</option><option>600000 - 800000</option><option>800000 - 1000000</option><option>More than 1000000</option></select>
        <label for="ep-sector">Sector</label>
        <select id="ep-sector" class="field"><option>Select Sector</option><option>Food</option><option>Clothing</option><option>Jewellery</option></select>
        <label for="ep-type">Type of Business</label>
        <select id="ep-type" class="field"><option>Select Business Type</option><option>Proprietorship</option></select>
        <label for="ep-age">Age of Business</label>
        <select id="ep-age" class="field"><option>Select Business Age</option><option>Less than 1 year</option><option>1-5 years</option><option>5-10 years</option><option>More than 10 years</option></select>
      </div>
      <div class="form-actions"><button class="btn btn-green" type="button"><i class="ti ti-filter"></i> Submit</button></div>
    </div>

    <div class="card panel">
      <div class="section-kicker">Profiles</div><h2 style="color:var(--g1);margin-bottom:18px">Your Search Results</h2>
      <div class="table-wrap">
        <table class="data-table">
          <thead><tr><th>Location</th><th>Title Business</th><th>Sector</th><th>Loan Range</th><th>Remark</th></tr></thead>
          <tbody>
            <tr><td>Lalmonirhat</td><td>Yummy Food</td><td>Food</td><td>100000 - 250000</td><td><a class="btn btn-green btn-small" href="/b-lab/application.html" target="_blank" rel="noopener">Details</a></td></tr>
            <tr><td>Lalmonirhat</td><td>Triptea</td><td>Food</td><td>100000 - 250000</td><td><button class="btn btn-green btn-small" type="button">Details</button></td></tr>
            <tr><td>Lalmonirhat</td><td>Prime Food</td><td>Food</td><td>100000 - 250000</td><td><button class="btn btn-green btn-small" type="button">Details</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
