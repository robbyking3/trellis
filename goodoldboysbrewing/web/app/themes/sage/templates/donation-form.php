<div class="container">
  <div class="card col-xs-8 offset-xs-2">
  <div class="card-block">
    <form data-parsley-validate>
    <div class="row">
      <div class="col-xs-9">
        <div class="btn-group btn-group-lg btn-group-justified" data-toggle="buttons">
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="option1" autocomplete="off"> $50
          </label>
          <label class="btn btn-outline-primary active">
            <input type="radio" name="options" id="option2" autocomplete="off" checked> $100
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="option3" autocomplete="off"> $150
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="option3" autocomplete="off"> $200
          </label>
        </div>
        </div>
        <div class="col-xs-3">
          <label class="form-control-label" for="donation">Total</label>
          <input type="text" data-numeric class="form-control form-control-lg" required id="donation" placeholder="">
        </div>
    </div>
    <div class="alert alert-success text-center">
      <b>$100</b> will feed Josh for a week!
    </div>
    <div class="row">
      <div class="col-xs-6">
        <div class="form-group has-success">
          <label class="form-control-label" for="cc-number">Credit Card Number</label>
          <input type="text" class="form-control form-control-success" id="cc-number" required placeholder="•••• •••• •••• ••••">
          <small class="form-text text-muted cc-brand"></small>
        </div>

      </div>
      <div class="col-xs-3">
        <div class="form-group">
          <label class="form-control-label" for="cc-exp" required>Exp</label>
          <input type="text" class="form-control" id="cc-exp" placeholder="•• / ••" required="">
        </div>
      </div>
      <div class="col-xs-3">
        <div class="form-group">
          <label class="form-control-label" for="cc-cvc">CVC</label>
          <input type="text" class="form-control" id="cc-cvc" placeholder="•••">
          <small class="form-text text-muted">On back of card</small>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" id="first-name" placeholder="" required>
        </div>
      </div>
      <div class="col-xs">
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" placeholder="" required>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="" required>
    </div>

    <div class="row">
      <div class="col-xs-3">
        <div class="form-group">
          <label for="postal-code">Postal Code</label>
          <input type="text" class="form-control" id="postal-code" placeholder="" required>
        </div>
      </div>
      <div class="col-xs-7">
        <div class="form-group">
          <label for="formGroupExampleInput">City</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
      </div>
      <div class="col-xs-2">
        <div class="form-group">
          <label for="formGroupExampleInput">Province</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Email Address</label>
      <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="" required>
    </div>

    <div class="card card-info">
      <div class="card-block">
        
        <div class="form-check">
          <label class="custom-control custom-checkbox">
          <input type="checkbox" id="isOrg" name="isOrg" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">
            This donation is from a business or organization.
          </span>
        </label>
        </div>



        <div class="form-group">
          <label for="formGroupExampleInput2">Organization</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg. Acme Safes">
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Address</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg. 325-123 Main St.">
        </div>

        <div class="row">
          <div class="col-xs-3">
            <div class="form-group">
              <label for="formGroupExampleInput">Postal Code</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. V0H 1Z0">
            </div>
          </div>
          <div class="col-xs-7">
            <div class="form-group">
              <label for="formGroupExampleInput">City</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. Victoria">
            </div>
          </div>
          <div class="col-xs-2">
            <div class="form-group">
              <label for="formGroupExampleInput">Province</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg. BC">
            </div>
          </div>
        </div>

      </div>
    </div> <!-- end of card inverse -->

    <div class="form-group">
      <label for="exampleTextarea">What inspired your gift today?</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

    <button class="btn btn-primary btn-lg" type="submit">Donate $100</button>
    
  </form>
  </div>
  </div>
</div>
