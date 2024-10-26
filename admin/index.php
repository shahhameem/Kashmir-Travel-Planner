<?php
$page_title = "Home";
include 'partials/header.php';
include 'config/loggedin.php';
?>
<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="custom-card text-center">
            <img src="icons/hotel.png" alt="hotel" class="icon-image mb-2">
            <div class="section-title">HOTELS</div>
            <p>All the popular 5 star and 7 seven star hotels handpicked for best services with 5 star ratings.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="custom-card text-center">
            <img src="icons/shik.png" alt="SHIKARA" class="icon-image mb-2">
            <div class="section-title">SHIKARA</div>
            <p>The Best adventure when you visit the famous Dal Lake of Srinagar. They range from simple boat to full-fledged house-boat.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="custom-card text-center">
            <img src="icons/reports.png" alt="report" class="icon-image mb-2">
            <div class="section-title">REPORTS</div>
            <p>The reports include all necessary information about the users of the services of the website. All the user data is present in reports.</p>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header section-title">ADMIN</div>
        <div class="card-body">
          <p>A database administrator (DBA) is the information technician responsible for directing or performing all activities related to maintaining a successful database environment. A DBA makes sure an organization's database and its related applications operate functionally and efficiently.</p>
          <h3>Importance of a DBA</h3>
          <p>If your organization uses a database management system (DBMS) for mission-critical workloads, it is important to employ one or more database administrators to ensure that applications have ongoing, uninterrupted access to data. Most modern organizations of every size use at least one DBMS, and therefore the need for database administrators is greater today than ever before.</p>
          <p>The DBA is responsible for understanding and managing the overall database environment. By developing and implementing a strategic blueprint to follow when deploying databases within their organization, DBAs are instrumental to the ongoing efficacy of modern applications that rely on databases for data storage and access.</p>
          <p>Without the DBA's oversight, it is inevitable that application and system outages, downtime and slowdowns will occur. Problems such as these result in business outages that can negatively affect revenue, customer experience and company reputation.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'partials/footer.php' ?>