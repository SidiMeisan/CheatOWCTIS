<div id="toast-container" class="toast-top-center" >
    @if(null !== session()->get( 'success'))
        @if(session()->get('success')=="newCOVIDTest")
        <div class="toast toast-success" id="newCOVIDTest" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('newCOVIDTest').style.display = 'none'; return false;">×</button>
            <div class="toast-message">New COVID Test Created</div>
        </div>
        @endif
        
        @if(session()->get('success')=="updateCOVIDTest")
        <div class="toast toast-info" id="updateCOVIDTest" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('updateCOVIDTest').style.display = 'none'; return false;">×</button>
            <div class="toast-message">COVID Test Updated</div>
        </div>
        @endif

        @if(session()->get('success')=="updateResult")
        <div class="toast toast-info" id="updateResult" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('updateResult').style.display = 'none'; return false;">×</button>
            <div class="toast-message">Update COVID Test Result</div>
        </div>
        @endif
    @endif
</div>