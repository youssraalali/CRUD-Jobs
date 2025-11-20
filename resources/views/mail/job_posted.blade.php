<h2> {{ $job->title}}</h2>

<p>Your Job had been posted</p>

<p>
    <a href="{{ url('/jobs/'. $job->id) }}">
        View Job Details
    </a>
</p>
