<div>
    @foreach($getRecord()->officerPerformanceAppraisalChecklists as $appriaisal)
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
             {{ $appriaisal->year }}
        </span>
    @endforeach
</div>
