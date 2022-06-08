<!-- <a href="#" id="btn-help">
    
</a> -->




<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<!--IMask-->
<script src="https://unpkg.com/imask"></script>

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!--Javascript-->
<script src="js/script.js"></script>


<!-- Button trigger modal -->
<button type="button" id="btn-help" data-bs-toggle="modal" data-bs-target="#modelId">
    <i class="fa-solid fa-question"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" style="width: 100vw;height: 100vh;margin: 0;padding: 0;" role="document">
        <div class="modal-content" style="height: 100vh;width: 100vw;min-height: 100%;border-radius: 0;">
            <div class="modal-header">
                <h5 class="modal-title">Como eu utilizo o Kifila?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/K1QICrgxTjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



<script>
    function showModal(){
        $('#modal').modal('show');
    }
</script>