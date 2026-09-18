<?php
$pageTitle = "Credit Providers | B-Lab";
$pageDescription = "Find credit providers and financing information through BIID Innovation Lab.";
$activePage = "finance";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="page-hero"><div class="container"><div class="page-kicker"><i class="ti ti-building-bank"></i> Access to Finance</div><h1>Find Your Credit Providers</h1><p>Review the credit-provider information currently available through B-Lab and explore relevant financing options.</p></div></section>
<section class="section section-alt">
  <div class="container">
    <div class="card panel">
      <div class="form-grid">
        <label for="provider-location">Location</label>
        <select id="provider-location" class="field"><option>Select Location</option><option>Lalmonirhat</option><option>Kurigram</option><option>Rajshahi</option></select>
        <label for="provider-amount">Loan Amount</label>
        <select id="provider-amount" class="field"><option>Select Amount</option><option>BDT 100000 - 200000</option></select>
        <label for="provider-category">Category</label>
        <input id="provider-category" class="field" type="text" placeholder="Category">
        <label for="provider-business">Type of Business</label>
        <input id="provider-business" class="field" type="text" placeholder="Business Type">
      </div>
      <div class="form-actions"><button class="btn btn-green" type="button"><i class="ti ti-search"></i> Submit</button></div>
    </div>

    <div class="section-head" style="margin-top:46px"><div class="section-kicker">Current Results</div><h2>Your Search Result</h2></div>
    <div class="table-wrap">
      <table class="data-table">
        <thead><tr><th>Name of Bank</th><th>District</th><th>Branch</th><th>Address</th><th>Contact</th><th>Loan Amount</th><th>Action</th></tr></thead>
        <tbody>
          <tr><td>City Bank</td><td>Lalmonirhat</td><td>Aditmari</td><td>19, bazar road</td><td>017XXXXXXX</td><td>BDT 1,00000-2,00000</td><td><a class="btn btn-outline btn-small" href="/b-lab/city_bank.html">Apply</a></td></tr>
          <tr><td>Sonali Bank</td><td>Lalmonirhat</td><td>Kaligonj</td><td>88,bazar road</td><td>016XXXXXXX</td><td>BDT 1,00000-1,50000</td><td><button class="btn btn-outline btn-small" type="button">Apply</button></td></tr>
          <tr><td>Eastern Bank</td><td>Lalmonirhat</td><td>Sadar</td><td>11A, Sadar Road</td><td>015XXXXXXX</td><td>BDT 1,00000 - 2,00000</td><td><button class="btn btn-outline btn-small" type="button">Apply</button></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
