<form>
  <div class="mb-3">
    <label for="numTransacciones" class="form-label">Número de transacciones</label>
    <input type="number" class="form-control" id="numTransacciones" name="numTransacciones" required>
  </div>
  <div class="mb-3">
    <label for="ticketPromedio" class="form-label">Ticket promedio</label>
    <input type="number" step="0.01" class="form-control" id="ticketPromedio" name="ticketPromedio" required>
  </div>
  <div class="mb-3">
    <label for="urlLinkedin" class="form-label">URL LinkedIn</label>
    <input type="url" class="form-control" id="urlLinkedin" name="urlLinkedin">
  </div>
  <div class="mb-3">
    <label for="urlInstagram" class="form-label">URL Instagram</label>
    <input type="url" class="form-control" id="urlInstagram" name="urlInstagram">
  </div>
  <div class="mb-3">
    <label for="mensajeAdicional" class="form-label">Mensaje adicional</label>
    <textarea class="form-control" id="mensajeAdicional" name="mensajeAdicional" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <!-- reCAPTCHA placeholder - Replace with actual reCAPTCHA implementation -->
    <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
    <small class="form-text text-muted">Por favor, verifica que no eres un robot.</small>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

  <div id="successMessage" class="alert alert-success mt-3" style="display: none;" role="alert">
    ¡Información recibida correctamente! Nos pondremos en contacto contigo pronto.
  </div>
</form>
