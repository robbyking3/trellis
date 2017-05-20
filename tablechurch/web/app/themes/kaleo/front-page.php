<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php dynamic_sidebar('sidebar-mission'); ?>

<div class="value-wrapper">

<div class="container">

<?php dynamic_sidebar('sidebar-values'); ?>
<div class="donation-form">
<form action="/" method="post" id="payment-form">
  <div class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-8">
        <div class="btn-group btn-group-lg btn-group-justified" id="presetAmount" data-toggle="buttons">
          <label class="btn btn-outline-primary">
            <input type="radio" name="donation-options" id="option1" value="50" autocomplete="off"> $50
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="donation-options" id="option2" value="100" autocomplete="off"> $100
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="donation-options" id="option3" value="150" autocomplete="off"> $150
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="donation-options" id="option3" value="200" autocomplete="off"> $200
          </label>
        </div>
        </div>
        <div class="col-md-4">
            <input type="text" data-numeric class="form-control form-control-lg" required autofocus="true" id="donation" placeholder="Other Amount">
        </div>
    </div>
    <div class="alert alert-info text-center" style="display: none;">
      <b>$100</b> will do X
    </div>
    <hr>

     <div class="form-row">
      <label for="card-element" class="d-block">
        Credit or debit card
      <div id="card-element" class="form-control form-control-lg">
        <!-- a Stripe Element will be inserted here. -->
      </div>
      </label>
      <!-- Used to display Element errors -->
      <div class="form-element text-danger" id="card-errors"></div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" id="first-name" placeholder="" >
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" placeholder="" >
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="formGroupExampleInput2">Email Address</label>
          <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="" >
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="" >
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label for="postal-code">Postal Code</label>
          <input type="text" class="form-control" id="postal-code" placeholder="" >
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="formGroupExampleInput">City</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" >
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="formGroupExampleInput">Province</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" >
        </div>
      </div>
    </div>
</div>

    <div class="card-footer bg-faded">
        
        <div class="form-check">
          <label class="custom-control custom-checkbox">
          <input type="checkbox" id="isOrg" name="isOrg" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">
            This donation is from a business or organization.
          </span>
        </label>
        </div>
        <div id="isOrgGroup" style="display: none;">
          <div class="form-group">
            <label for="formGroupExampleInput2">Organization</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg. Acme Safes">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg. 325-123 Main St.">
          </div>

          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label for="formGroupExampleInput">Postal Code</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. V0H 1Z0">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="formGroupExampleInput">City</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. Victoria">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label for="formGroupExampleInput">Province</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. BC">
              </div>
            </div>
          </div>
        </div>

    </div> <!-- end of card inverse -->

  <div class="card-block">
    <div class="form-group">
      <label for="exampleTextarea">What inspired your gift today?</label>
      <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
    </div>

    <button class="btn btn-primary btn-lg btn-block" type="submit">Donate <span id="btnAmount"></span></button>
 
  </div>
  </div>
  </form>
  </div>
</div>

</div>

<?php dynamic_sidebar('sidebar-bio'); ?>
