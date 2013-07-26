<div id="offset-calculator" class="alignleft">
<h3>Wheel Details (3-piece wheel / split rim)</h3>
<form onsubmit="calculator.calculate(this); trackEvent('Wheel Tools', 'split-rim', calculator.results); return false;" onreset="calculator.clearall();">
<div class="field-group">
<div class="field">
  <label for="oldOuter" style="color: #C00;">Original <em>outer</em> lip width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="oldOuter" name="oldOuter" size="4" style="background: #FCD116;" />
</div>
<div class="field">
  <label for="newOuter" style="color: #060;">New <em>outer</em> lip width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="newOuter" name="newOuter" size="4" style="background: #FCD116;" />
</div>
</div>
<div class="field-group">
<div class="field">
  <label for="oldInner" style="color: #C00;">Original <em>inner</em> barrel width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="oldInner" name="oldInner" size="4" style="background: #FF8C00;" />
</div>
<div class="field">
  <label for="newInner" style="color: #060;">New <em>inner</em> barrel width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="newInner" name="newInner" size="4" style="background: #FF8C00;" />
</div>
</div>
<div class="field-group">
<div class="field">
  <label for="wheelWidth">Original wheel width</label> 
  <span class="unit">(<abbr title="inches">in.</abbr>)</span>
  <input type="text" id="wheelWidth" name="wheelWidth" size="4" style="background: #FFE4B5;" />
</div>
</div>
<div class="field-group">
<div class="field">
  <label for="offset">Original wheel offset</label>
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span> 
  <input type="text" id="offset" name="offset" size="4" style="background: #FFE4B5;" />
</div>
<div class="field" style="float: right;">
  <label for="spacers">Spacers</label> 
  <span class="unit">(<abbr title="millimetres">mm</abbr>)</span>
  <input type="text" id="spacers" name="spacers" size="4" value="0" style="background: #FFE4B5;" />
</div>
</div>
<div class="controls"><input type="submit" class="button" value="Calculate" />&nbsp; <input type="reset"  class="button" value="Reset" /></div>
</form>

<table id="offset-calculator-result" class="results">
<tr><th></th><th>Original</th><th>New</th></tr>
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
