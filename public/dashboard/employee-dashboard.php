<?php
include_once "../../app/bootstrap.php";

use Util\Template;

$pageName = "Dashboard";
$templateDir = "public/dashboard"; 

if (!$_SESSION['loggedIn'] || !isset($_SESSION['loggedIn'])) {
    returnToPage("../forbidden.php");
}
init_dashboard($currentUser, Template::header($pageName, $templateDir));

?>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-display1 icon-gradient bg-happy-fisher">
                        </i>
                    </div>
                    <div>Dashboard
                        <div class="page-title-subheading">Welcome back! You're all set to manage your time off.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" onclick="location.href='send-absence-request.php'" title="New absence" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-calendar-plus"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Options
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="send-absence-request.php" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            New Absence Request
                                        </span>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Your Calendar
                                        </span>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="calendar.php" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Calendar
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <h1 class="card-header">Your Absences</h1>
                    <canvas id="absencesPie"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
    
    var config = {
        headers: {
            "user-token": "<?php echo $_SESSION['login_token']; ?>"
        }
    }

    $(document).ready( ()=> {

        var ctx = $("#absencesPie");
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [1, 5, 2, 6],
                    backgroundColor: [
                        '#3ac47d',
                        '#d92550',
                        '#f7b924',
                        '#3f6ad8'
                    ]
                }], 
                labels: [
                    'Vacation',
                    'Sickness',
                    'School', 
                    'Work from Home'
                ]
            }
        });

        getStats(absenceChart);
    });

    function getStats() {
        axios.get('../endpoints/employee-absences.php', config)
            .then(function (response) {
                // handle success
                var absences = response.data;
                // console.log(response);
                for (var i = 2; i > -1; i--) {
                    var stats = absences[MONTHS[thisMonth - i]]; 
                    
                    absenceChart.data.datasets[0].data.push(stats['vacation']);
                    absenceChart.data.datasets[1].data.push(stats['sickness']);
                    absenceChart.data.datasets[2].data.push(stats['school']);
                    absenceChart.data.datasets[3].data.push(stats['work from home']);                    
                }

                absenceChart.update();
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                setTimeout(getAbsenceStats, 20000);
            }
        );
    }
    

    </script>

    <?php
echo Template::footer($templateDir);