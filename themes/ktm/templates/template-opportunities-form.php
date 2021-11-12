<?php 
/**
 * Template Name: Opportunities Form
 */

get_header(); ?>
<?php ktm_header_title('Apply for Opportunites at Keys To Me'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <section class="apply">
                <!-- Contact section -->
                <section class="apply-section">
                <form>
                    <div class="mb-3">
                    <label for="position" class="form-label">Position applied for</label>
                    <select name="position" id="position">
                        <option value="position1">Team Member</option>
                        <option value="position2">Content Creator</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                    <label for="flemingEmail" class="form-label">Fleming email</label>
                    <input type="email" class="form-control" id="flemingEmail">
                    </div>
                    <div class="mb-3">
                    <label for="nonFlemingEmail" class="form-label">Non-Fleming email</label>
                    <input type="email" class="form-control" id="nonFlemingEmail">
                    </div>
                    <div class="mb-3">
                    <label for="program" class="form-label">Program</label>
                    <input type="text" class="form-control" id="program">
                    </div>
                    <div class="mb-3">
                    <label for="graduationDate" class="form-label">Expected Graduation Date</label>
                    <input type="date" class="form-control" id="graduationDate">
                    </div>
                    <div class="mb-3">
                    <label for="phone" class="form-label">Mobile number</label>
                    <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                    <label for="interest" class="form-label">Why are you interested in this role?</label>
                    <textarea class="form-control" id="interest" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                    <label for="resume" class="form-label">Upload Resume (Supported file formats: doc, docx, pdf Maximum file size <2MB) </label>
                    <input type="file" class="form-control" id="resume" placeholder="Upload">
                    </div>
                    <button type="submit" class="btn btn-submit btn-primary-alternative">Submit</button>
                </form>
                </section>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>