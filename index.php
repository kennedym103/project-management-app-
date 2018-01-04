<?php
require 'inc/functions.php';

$pageTitle = "Time Tracker";
$page = null;

include 'inc/header.php';
?>
	<div class="section catalog random">
    <div class="col-container actions-container asdf">
      <div class="actions-wrapper">
        <div class="actions">
          <div id="cl" class="actions-item action-left">
            <a class="actions-link" href="task.php">
              <span  class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
              Add Task
            </a>
          </div>
          <div class="actions-item action-center">
            <a class="actions-link" href="project.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
              </span>
              Add Project
            </a>
          </div>
          <div id="cr" class="actions-item action-right">
            <a class="actions-link" href="reports.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#report_icon"></use></svg>
              </span>
              View Reports
            </a>
          </div>
					<div class="circle">
						<div class="inner-circle">
							<div class="triangle"></div>
						</div>
					</div>
        </div>
      </div>
			<div class="text-container">
				<h1>Welcome</h1>
				<p class="actions-copy">What would you like to do today?</p>
			</div>

		</div>

	</div>

<?php include("inc/footer.php"); ?>
