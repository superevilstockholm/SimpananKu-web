<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-1 border-primary bg-transparent" style="backdrop-filter: blur(10px); box-shadow: inset 0 0 50px rgba(var(--bs-primary-rgb), 0.3);">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Settings —</h1>
            </div>
            <div class="modal-body">
                <label for="theme" class="form-label">Theme</label>
                <select class="form-select custom-select bg-transparent border-1 border-primary-subtle" aria-labelledby="theme" aria-label="Default select example">
                    <option selected>Dark</option>
                    <option>Light</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary text-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<style>
    .custom-select option {
        background-color: rgba(0, 0, 0, 1);
        color: white;
    }
    /* Saat di-hover (opsional) */
    .custom-select option:hover {
        background-color: rgba(0, 123, 255, 0.5);
        color: #fff;
    }
</style>
