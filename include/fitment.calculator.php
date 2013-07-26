<div id="offset-calculator" class="alignleft">
<h3>Wheel Details (old vs. new)</h3>
<form onsubmit="calculator.calculateFitment(this); trackEvent('Wheel Tools', 'wheel-fitment', calculator.results); return false;" onreset="calculator.clearall();">
<div class="field-group">
<div class="field">
  <label for="wheelWidth" style="color: #C00;">Old wheel <em>width</em></label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="wheelWidth" name="wheelWidth" size="4" style="background: #FFE4B5;" />
</div>
<div class="field">
  <label for="offset" style="color: #C00;">Old wheel <em>offset</em></label>
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span> 
  <input type="text" id="offset" name="offset" size="4" style="background: #FFE4B5;" />
</div>
</div>
<div class="field-group">
<div class="field">
  <label for="newWheelWidth" style="color: #060;">New wheel <em>width</em></label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="newWheelWidth" name="newWheelWidth" size="4" style="background: #FFE4B5;" />
</div>
</div>
<div class="field">
  <label for="newOffset" style="color: #060;">New wheel <em>offset</em></label>
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span> 
  <input type="text" id="newOffset" name="newOffset" size="4" style="background: #FFE4B5;" />
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
<div class="controls">
  <input type="submit" class="button" value="Calculate" />&nbsp; 
  <input type="reset"  class="button" value="Reset" />&nbsp; 
  <!--<input type="button" class="button" value="Share Results" onclick="calculator.share(this);" />-->
</div>
</form>

<table id="offset-calculator-result" class="results">
<tr><th></th><th>Old</th><th>New</th></tr>
<tr><th>Wheel Width <span class="unit">(<abbr title="inches">in.</abbr>)</span></th>
<td id="old-width">-</td><td id="new-width">-</td></tr>
<tr><th>Wheel Offset <span class="unit">(<abbr title="millimetres">mm</abbr>)</span></th>
<td id="old-offset">-</td><td id="new-offset">-</td></tr>
<tr><th>Overall Offset <span class="unit">(<abbr title="millimetres">mm</abbr>)</span></th>
<td>-</td><td id="overall-offset">-</td></tr>
<tr><th>Arch clearance <span class="unit">(<abbr title="millimetres">mm</abbr>)</span></th>
<td>-</td><td id="arch-diff">-</td></tr>
<tr><th>Strut clearance <span class="unit">(<abbr title="millimetres">mm</abbr>)</span></th>
<td>-</td><td id="strut-diff">-</td></tr>
</table>

<div id="comparison" class="results"></div>
<div id="resource-links" class="results"></div>
</div>
