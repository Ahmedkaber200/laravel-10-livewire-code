<div>
    <form wire:submit.prevent="update">
        <h1>Edit Data</h1>
        <input type="text" wire:model.live="title" id="titleInput">
        <input type="text" wire:model="content">
        <button type="submit">Update</button>
    </form>
</div>

<script>
    // Get the title input element
    let titleInput = document.getElementById('titleInput');
    // Add an event listener for the keypress event
    titleInput.addEventListener('keypress', function() {
        // Use a timeout to ensure that the value is updated after the keypress event
        setTimeout(function() {
            console.log("Current Title:", titleInput.value);
        });
    });
</script>

<!-- onclick function call start -->
<!-- <div>
<form wire:submit.prevent="update">
    <h1>Edit Data</h1>
    <input type="text" wire:model="title" id="titleInput" onclick="handleTitleClick()">
    <input type="text" wire:model="content">
    <script>
    function handleTitleClick() {
        let titleInput = document.getElementById('titleInput');
        console.log("Current Title:", titleInput.value);
    }
</script>

    <button type="submit">Update</button>
</form>
</div> -->
<!-- onclick function call end -->