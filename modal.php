<link rel="stylesheet" href="modalstyle.css">



<!-- The Modal -->
<button id="open-btn">Get Started</button>

<div id="theModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close">&times;</span>
        <h2>TERMS & CONDITIONS</h2>
    </div> 
<div class="modal-body">
    <h2><b>Opening and Maintenance:</b></h2>
    <p>Accounts can be opened by individuals who meet the bank's eligibility criteria and provide valid identification documents.
Account holders are responsible for maintaining accurate personal information and promptly updating the bank of any changes.
The bank reserves the right to close or suspend accounts that are inactive or in violation of the terms and conditions.
</p>

        <h2><b>Deposits and Withdrawals:</b></h2>
    <p>Deposits can be made through various channels such as cash, checks, or electronic transfers, subject to verification and acceptance by the bank.
Withdrawals can be made using approved methods, and the bank may impose transaction limits or fees.
Funds deposited may be subject to holds or clearance periods as per the bank's policies and regulatory requirements.
</p>

        <h2><b>Interest Rates and Fees:</b></h2>
    <p>Interest rates applicable to accounts are subject to change based on market conditions and the bank's discretion.
Fees may be charged for account maintenance, transactions, overdrafts, and other services, as disclosed in the bank's fee schedule.
</p>

        <h2><b>Legal Rights and Responsibilities:</b></h2>
    <p>Account holders are responsible for maintaining the security of their account information, including passwords and personal identification numbers (PINs).
The bank reserves the right to take necessary actions to protect against fraudulent activities and unauthorized access to accounts.
Account holders must comply with all applicable laws, regulations, and contractual obligations related to their banking activities.
</p>

        <h2><b>Privacy and Security:</b></h2>
    <p>The bank is committed to safeguarding the privacy and confidentiality of customer information in accordance with relevant privacy laws and regulations.
Personal and financial information provided to the bank will be used only for legitimate banking purposes and will not be disclosed to third parties without consent, except as required by law.
</p>
        <h2><b>Termination and Closure:</b></h2>
    <p>Account holders may request the closure of their accounts at any time, subject to any outstanding obligations or restrictions.
The bank may terminate or suspend accounts for reasons including but not limited to non-compliance with the terms and conditions, suspected fraud, or legal requirements.
</p>

        <h2><b>Amendment of Terms and Conditions:</b></h2>
    <p>The bank reserves the right to modify or update these terms and conditions at any time, with notice provided to account holders through appropriate channels.
Continued use of bank services following the amendment constitutes acceptance of the revised terms and conditions.
</p>
</div> 
<div class="modal-footer">
    <button type="submit" onclick="">Accept</button>
    <button type="button" onclick="">Decline</button>
</div>

</div>
</div>



<script>

    // Get the modal
var modal = document.getElementById("theModal");

// Get the button that opens the modal
var btn = document.getElementById("open-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  