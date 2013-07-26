<div id="offset-calculator" class="alignleft">
<h3>Single Wheel Details</h3>
<form onsubmit="calculator.calculateEquivalents(this); trackEvent('Wheel Tools', 'simple-comparison', calculator.results); return false;" onreset="calculator.clearall();">
<div class="field-group">
<div class="field">
  <label for="wheelWidth">Wheel width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="wheelWidth" name="wheelWidth" size="4" style="background: #FFE4B5;" />
</div>
<div class="field">
  <label for="offset">Wheel offset</label>
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span> 
  <input type="text" id="offset" name="offset" size="4" style="background: #FFE4B5;" />
</div>
</div>
<div class="field-group">
<div class="field">
  <label for="diameter">Wheel diameter</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="diameter" name="diameter" size="4" style="background: #F0F0F0;" />
</div>
<div class="field">
  <label for="spacers">Spacers</label> 
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span>
  <input type="text" id="spacers" name="spacers" size="4" value="0" style="background: #F0F0F0;" />
</div>
</div>
<div class="controls"><input type="submit" class="button" value="Calculate" />&nbsp; <input type="reset"  class="button" value="Reset" /></div>
</form>
<div id="comparison" class="results"></div>
</div>
