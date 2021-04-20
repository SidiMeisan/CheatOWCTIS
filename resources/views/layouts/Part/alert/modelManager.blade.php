<div id="toast-container" class="toast-top-center" >
    @if(null !== session()->get( 'success'))
        @if(session()->get('success')=="newKit")
        <div class="toast toast-success" id="newKits" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('newKits').style.display = 'none'; return false;">×</button>
            <div class="toast-message">New COVID Test Kit Created</div>
        </div>
        @endif

        @if(session()->get('success')=="newTester")
        <div class="toast toast-success" id="newKits" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('newKits').style.display = 'none'; return false;">×</button>
            <div class="toast-message">New Tester Created</div>
        </div>
        @endif

        @if(session()->get('success')=="editKit")
        <div class="toast toast-info" id="editKit" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('editKit').style.display = 'none'; return false;">×</button>
            <div class="toast-message">COVID Test Kit Updated</div>
        </div>
        @endif

        @if(session()->get('success')=="StockKit")
        <div class="toast toast-info" id="StockKit" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('StockKit').style.display = 'none'; return false;">×</button>
            <div class="toast-message">COVID Test Kit Stock Added</div>
        </div>
        @endif
        
        @if(session()->get('success')=="DeleteKit")
        <div class="toast toast-warning" id="DeleteKit" aria-live="assertive" style="">
            <button type="button" class="toast-close-button" role="button"
            onclick="document.getElementById('DeleteKit').style.display = 'none'; return false;">×</button>
            <div class="toast-message">COVID Test Kit Deleted</div>
        </div>
        @endif
    @endif
</div>