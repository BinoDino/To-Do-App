<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel"> Neue Aufgabe eintragen </h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="neueAufgabe">Was muss erledigt werden?</label>
          <input type="text" class="form-control" name="neueAufgabe" aria-describedby="todoHelp">
          <small id="todoHelp" class="form-text text-muted">Geben Sie hier etwas ein.</small>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0"> Tags </legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tags" id="studium" value="studium" checked>
                <label class="form-check-label" for="tag1">
                  Studium
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tags" id="haushalt" value="haushalt">
                <label class="form-check-label" for="tag2">
                  Haushalt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tags" id="freizeit" value="freizeit">
                <label class="form-check-label" for="tag3">
                  Freizeit
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0"> Priorität </legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prios" id="hoch" value="hoch" checked>
                <label class="form-check-label" for="prio1">
                  hoch
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prios" id="mittel" value="mittel">
                <label class="form-check-label" for="prio2">
                  mittel
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prios" id="gering" value="gering">
                <label class="form-check-label" for="prio3">
                  gering
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <input class="btn btn-outline-info" type="submit" value="Eintragen" name = "eintragen"/>
      </form>
      </div>
    </div>
  </div>
</div>