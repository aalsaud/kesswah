<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('a').click(function() {
       $('#myTable tbody').append('<tr class="child"><td>blahblah</td></tr>');
    });
});
</script>
<style type="text/css">
	@media only screen and (max-width: 800px) {
	
	/* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
		text-align:left;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
}
						
</style>
<title></title>
</head>
<body>
<table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf">
				  <tr>
					  <th>Code</th>
					  <th>Company</th>
					  <th class="numeric">Price</th>
					  <th class="numeric">Change</th>
					  <th class="numeric">Change %</th>
					  <th class="numeric">Open</th>
					  <th class="numeric">High</th>
					  <th class="numeric">Low</th>
					  <th class="numeric">Volume</th>
				  </tr>
			  </thead>
				<tbody>
					<tr>
						<td data-title="Code">AAC</td>
						<td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.38">﷼5.15</ccc></td>
						<td data-title="Change" class="numeric">-0.01</td>
						<td data-title="Change %" class="numeric">-0.36%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.39">﷼5.19</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.39">﷼5.19</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.38">﷼5.15</ccc></td>
						<td data-title="Volume" class="numeric">9,395</td>
					</tr>
					<tr>
						<td data-title="Code">AAD</td>
						<td data-title="Company">ARDENT LEISURE GROUP</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.15">﷼4.3</ccc></td>
						<td data-title="Change" class="numeric">  +0.02</td>
						<td data-title="Change %" class="numeric">1.32%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.14">﷼4.26</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.15">﷼4.3</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.13">﷼4.22</ccc></td>
						<td data-title="Volume" class="numeric">56,431</td>
					</tr>
					<tr>
						<td data-title="Code">AAX</td>
						<td data-title="Company">AUSENCO LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$4.00">﷼14.94</ccc></td>
						<td data-title="Change" class="numeric">-0.04</td>
						<td data-title="Change %" class="numeric">-0.99%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$4.01">﷼14.98</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$4.05">﷼15.13</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$4.00">﷼14.94</ccc></td>
						<td data-title="Volume" class="numeric">90,641</td>
					</tr>
					<tr>
						<td data-title="Code">ABC</td>
						<td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.00">﷼11.2</ccc></td>
						<td data-title="Change" class="numeric">  +0.06</td>
						<td data-title="Change %" class="numeric">2.04%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$2.98">﷼11.13</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.00">﷼11.2</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$2.96">﷼11.06</ccc></td>
						<td data-title="Volume" class="numeric">862,518</td>
					</tr>
					<tr>
						<td data-title="Code">ABP</td>
						<td data-title="Company">ABACUS PROPERTY GROUP</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.91">﷼7.13</ccc></td>
						<td data-title="Change" class="numeric">0.00</td>
						<td data-title="Change %" class="numeric">0.00%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.92">﷼7.17</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.93">﷼7.21</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$1.90">﷼7.1</ccc></td>
						<td data-title="Volume" class="numeric">595,701</td>
					</tr>
					<tr>
						<td data-title="Code">ABY</td>
						<td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.77">﷼2.88</ccc></td>
						<td data-title="Change" class="numeric">  +0.02</td>
						<td data-title="Change %" class="numeric">2.00%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.76">﷼2.84</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.77">﷼2.88</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.76">﷼2.84</ccc></td>
						<td data-title="Volume" class="numeric">54,567</td>
					</tr>
					<tr>
						<td data-title="Code">ACR</td>
						<td data-title="Company">ACRUX LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.71">﷼13.86</ccc></td>
						<td data-title="Change" class="numeric">  +0.01</td>
						<td data-title="Change %" class="numeric">0.14%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.70">﷼13.82</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.72">﷼13.89</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.68">﷼13.74</ccc></td>
						<td data-title="Volume" class="numeric">191,373</td>
					</tr>
					<tr>
						<td data-title="Code">ADU</td>
						<td data-title="Company">ADAMUS RESOURCES LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.72">﷼2.69</ccc></td>
						<td data-title="Change" class="numeric">0.00</td>
						<td data-title="Change %" class="numeric">0.00%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.73">﷼2.73</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.74">﷼2.76</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$0.72">﷼2.69</ccc></td>
						<td data-title="Volume" class="numeric">8,602,291</td>
					</tr>
					<tr>
						<td data-title="Code">AGG</td>
						<td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$7.81">﷼29.17</ccc></td>
						<td data-title="Change" class="numeric">-0.22</td>
						<td data-title="Change %" class="numeric">-2.74%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$7.82">﷼29.21</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$7.82">﷼29.21</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$7.81">﷼29.17</ccc></td>
						<td data-title="Volume" class="numeric">148</td>
					</tr>
					<tr>
						<td data-title="Code">AGK</td>
						<td data-title="Company">AGL ENERGY LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$13.82">﷼51.62</ccc></td>
						<td data-title="Change" class="numeric">  +0.02</td>
						<td data-title="Change %" class="numeric">0.14%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$13.83">﷼51.65</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$13.83">﷼51.65</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$13.67">﷼51.06</ccc></td>
						<td data-title="Volume" class="numeric">846,403</td>
					</tr>
					<tr>
						<td data-title="Code">AGO</td>
						<td data-title="Company">ATLAS IRON LIMITED</td>
						<td data-title="Price" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.17">﷼11.84</ccc></td>
						<td data-title="Change" class="numeric">-0.02</td>
						<td data-title="Change %" class="numeric">-0.47%</td>
						<td data-title="Open" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.11">﷼11.62</ccc></td>
						<td data-title="High" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.22">﷼12.03</ccc></td>
						<td data-title="Low" class="numeric"><ccc style="font-size: inherit; background-color: transparent; -webkit-transition: none; transition: none;" title="$3.10">﷼11.58</ccc></td>
						<td data-title="Volume" class="numeric">5,416,303</td>
					</tr>
				</tbody>
		  </table>
</body>
</html>