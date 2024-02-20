<div class="sidebar">
    <a href="{{ route('business.index') }}" class="{{ strpos(request()->url(), 'business' ) ? 'active' : '' }}">Business</a>
    <a href="{{ route('branch.index') }}" class="{{ strpos(request()->url(), 'branch' ) ? 'active' : '' }}">Branch</a>
    <a href="">Business Schedule</a>
</div>