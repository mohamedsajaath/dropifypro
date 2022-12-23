<p class="card-text fs-7">
    <i class="fa fa-check text-primary me-3"></i>
    Support Tickets
</p>
<p class="card-text fs-7">
    <i class="fa fa-check text-primary me-3"></i>
    Sales Report
</p>

<p class="card-text fs-7">
    @if( $plan_detail['name'] == "Starter")
        <i class="fa fa-times text-danger me-3"></i>
    @else
        <i class="fa fa-check text-primary me-3"></i>
    @endif
    Wholesale Request
</p>
<p class="card-text fs-7">
    @if( $plan_detail['name'] == "Starter")
        <i class="fa fa-times text-danger me-3"></i>
    @else
        <i class="fa fa-check text-primary me-3"></i>
    @endif
    Recommended Products
</p>
<p class="card-text fs-7">
    @if( $plan_detail['name'] == "Business")
        <i class="fa fa-check text-primary me-3"></i>
    @else
        <i class="fa fa-times text-danger me-3"></i>
    @endif
    Onboarding
</p>

<p class="card-text fs-7">
    @if( $plan_detail['name'] == "Business")
        <i class="fa fa-check text-primary me-3"></i>
    @else
        <i class="fa fa-times text-danger me-3"></i>
    @endif
    Dedicated Account Managers
</p>
