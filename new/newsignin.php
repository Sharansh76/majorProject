<?php
include 'C:\xampp\htdocs\dashboard\newtheme\jobhunt\header.php';
// Fetch distinct locations from the candidate table
$locationQuery = "SELECT DISTINCT location AS locationDetail FROM candidate WHERE location IS NOT NULL AND location != ''";
$locationResult = $conn->query($locationQuery) or die("Query failed: " . $conn->error);

// Fetch distinct skills from the candidate table
$skillsQuery = "SELECT DISTINCT skill AS skillDetail FROM candidate WHERE skill IS NOT NULL AND skill != ''";
$skillsResult = $conn->query($skillsQuery) or die("Query failed: " . $conn->error);

// Fetch distinct education levels from the candidate table
$educationQuery = "SELECT DISTINCT education AS educationDetail FROM candidate WHERE education IS NOT NULL AND education != ''";
$educationResult = $conn->query($educationQuery) or die("Query failed: " . $conn->error);
?>

<style>
    #search_bar {
        padding: 15px;
        border-radius: 20px;
        margin-bottom: 20px;
        background-color: #f8f9fa;
    }

    .form-select,
    .form-control {
        margin-bottom: 10px;
    }

    #budget_min, #experience_max {
        margin-top: 10px;
    }
</style>

<div class="container bg-light" id="search_bar">
    <form action="candidates.php" method="GET">
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <!-- Skills -->
                    <div class="col-md-3">
                        <label for="skillsDetail" class="form-label">Skills</label>
                        <select id="skillsDetail" name="skillsDetail" class="form-select">
                            <option value="" <?php echo !isset($_GET['skillsDetail']) || $_GET['skillsDetail'] == '' ? 'selected' : ''; ?>>Select skills...</option>
                            <?php if ($skillsResult->num_rows > 0): ?>
                                <?php while ($skill = $skillsResult->fetch_assoc()): ?>
                                    <option value="<?php echo htmlspecialchars($skill['skillDetail']); ?>" <?php echo (isset($_GET['skillsDetail']) && $_GET['skillsDetail'] == $skill['skillDetail']) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($skill['skillDetail']); ?>
                                    </option>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <option value="" disabled>No skills available</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <!-- Education -->
                    <div class="col-md-3">
                        <label for="educationDetail" class="form-label">Education</label>
                        <select id="educationDetail" name="educationDetail" class="form-select">
                            <option value="" <?php echo !isset($_GET['educationDetail']) || $_GET['educationDetail'] == '' ? 'selected' : ''; ?>>Select education...</option>
                            <?php if ($educationResult->num_rows > 0): ?>
                                <?php while ($education = $educationResult->fetch_assoc()): ?>
                                    <option value="<?php echo htmlspecialchars($education['educationDetail']); ?>" <?php echo (isset($_GET['educationDetail']) && $_GET['educationDetail'] == $education['educationDetail']) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($education['educationDetail']); ?>
                                    </option>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <option value="" disabled>No education levels available</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <!-- Minimum Budget -->
                    <div class="col-md-2">
                        <label for="budget_min" class="form-label">Min Budget</label>
                        <input type="number" id="budget_min" name="budget_min" class="form-control" placeholder="Min Budget" value="<?php echo isset($_GET['budget_min']) ? htmlspecialchars($_GET['budget_min']) : ''; ?>" />
                    </div>

                    <!-- Maximum Experience -->
                    <div class="col-md-2">
                        <label for="experience_max" class="form-label">Max Experience</label>
                        <input type="number" id="experience_max" name="experience_max" class="form-control" placeholder="Max Years" value="<?php echo isset($_GET['experience_max']) ? htmlspecialchars($_GET['experience_max']) : ''; ?>" />
                    </div>

                    <!-- Location -->
                    <div class="col-md-2">
                        <label for="locationDetail" class="form-label">Location</label>
                        <select id="locationDetail" name="locationDetail" class="form-select">
                            <option value="" <?php echo !isset($_GET['locationDetail']) || $_GET['locationDetail'] == '' ? 'selected' : ''; ?>>Select location...</option>
                            <?php if ($locationResult->num_rows > 0): ?>
                                <?php while ($location = $locationResult->fetch_assoc()): ?>
                                    <option value="<?php echo htmlspecialchars($location['locationDetail']); ?>" <?php echo (isset($_GET['locationDetail']) && $_GET['locationDetail'] == $location['locationDetail']) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($location['locationDetail']); ?>
                                    </option>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <option value="" disabled>No locations available</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Search Button -->
            <div class="col-md-2 d-flex align-items-center">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </div>
    </form>
</div>

<?php
$conn->close();
?>
