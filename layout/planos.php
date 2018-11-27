<div class="container">

  <div class="section-header">
    <h2>Planos</h2>
    <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
          <h6 class="card-price text-center">$150</h6>
          <hr>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
            <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
            <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
            <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
          </ul>
          <hr>
          <div class="text-center">
            <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
          <h6 class="card-price text-center">$250</h6>
          <hr>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
            <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
            <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
          </ul>
          <hr>
          <div class="text-center">
            <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Pro Tier -->
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
          <h6 class="card-price text-center">$350</h6>
          <hr>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
          </ul>
          <hr>
          <div class="text-center">
            <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

<!-- Modal Order Form -->
<div id="buy-ticket-modal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buy Tickets</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="#">
          <div class="form-group">
            <input type="text" class="form-control" name="your-name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="your-email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="">-- Select Your Ticket Type --</option>
              <option value="standard-access">Standard Access</option>
              <option value="pro-access">Pro Access</option>
              <option value="premium-access">Premium Access</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn">Buy Now</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->