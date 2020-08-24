<?php $footercms = DB::table('pages')->where('id', 6)->first(); ?>

<!-- Begin: FOOTER -->
<div class="copyrightSec">
    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <p>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
      </div>
    </div>
  </div>
<!-- END Footer -->  
