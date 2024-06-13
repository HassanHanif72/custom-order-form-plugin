<div class="order-submit">
<div class="form-field">
    <label>Your Name*</label>
    [text* your-name placeholder "Your Name"]
  </div>
<div class="form-field">
    <label>Your Email*</label>
    [email* your-email placeholder "Your Email"]
</div>
<div class="form-field">
    <label>Phone Number*</label>
    [number* phone-number placeholder "Phone Number"]
</div>
<div class="form-field">
    <label>Education</label>
    [select education "Under Graduate" "Graduate" "Masters" "PhD"]
</div>

<div class="form-field">
    <label>Academic Subject</label>
    [select academic-subject "Accounting" "Accounts Law" "Advertising" "Aeronautical Engineering" "Agency Law" "Agriculture" "Animal Management" "Anthropology" "Archaeology" "Architecture" "Art" "Astrophysics" "Biochemistry" "Biology" "Biotechnology" "Business" "Chemical Engineering" "Chemistry" "Child Care" "Civil Engineering" "Civil Litigation Law" "Classics" "Commercial Law" "Commercial Property Law" "Communications" "Company Law / Business Law" "Comparative Law" "Computer Engineering" "Computing" "Constitutional / Administrative Law" "Consumer Law" "Contract Law" "Criminal Law" "Criminal Litigation" "Criminology" "Crisis Management" "Cultural Studies" "Design" "Drama" "E-Commerce" "Econometrics" "Economics" "Education" "Electrical Engineering" "Electronic Engineering" "Employment Law Engineering" "English Language" "Environmental Studies" "Equity Law" "Estate Management" "European Law" "European Studies" "Events Management" "Family Law" "Fashion" "Film Studies" "Finance" "Finance Law" "Forensic Science" "General Law" "Genetics" "Geography" "Geology" "History" "Hospitality" "Housing" "Housing Law" "HRM" "Human Rights" "I.T."]
</div>

<div class="form-field">
    <label>Paper Type</label>
    [select papper-type "Dissertation" "Dissertation Topics" "Dissertation-Abstract" "Dissertation Proposal" "Dissertation-Analysis Chapter" "Dissertation-Conclusion Chapter" "Dissertation-Introduction Chapter" "Dissertation-Literature Review Chapter" "Dissertation-Methodology Chapter" "Dissertation Editing and Proof Reading" "Essay" "Admission Essay" "Scholarship Essay" "Case Study" "Annotated Bibliography" "Assignment" "Book Report/Review" "Case Analysis" "Course Work" "Information and Communication/ Computer Technology" "Reaction Paper" "Research Paper" "Research Proposal" "Statistics Project" "Term Paper" "Thesis" "Thesis Proposal" "Laboratory Report" "Movie Review" "Multiple Choice Questions" "Power Point Presentation" "Article" "Speech" "Other"]
</div>

<div class="form-field">
    <label>Number of Pages*</label>
    [number* numberofpages min:1 id:pages class:pages "1"]
</div>

<div class="form-field">
    <label>Paper Quality</label>
    [select paper-quality id:paperQuality "2:2 Class" "2:1" "1st Class"]
</div>

<div class="form-field">
    <label>Word Count</label>
    [text NumberofWords id:wordCount readonly placeholder "250"]
</div>

<div class="form-field">
    <label>Delivery Time</label>
    [select deliverytime id:deliveryTime "24 Hour" "2 Days" "3 Days" "4-5 Days" "6-10 Days" "11-15 Days" "More than 15 Days"]
</div>

<div class="form-field">
    <label>Major/Course*</label>
    [text* major-course]
</div>

<div class="form-field">
    <label>Topic*</label>
    [text* topic]
</div>

<div class="form-field">
    <label>Who Assisted You?</label>
    [select who-assisted "No One" "Abben" "James" "Justin" "Michelle" "Mona" "Other"]
</div>

<div class="form-field">
    <label>Citation Style</label>
    [select citationstyle "MLA" "APA" "Harvard" "Oxford" "Chicago/Turabian" "Other"]
</div>

<div class="form-field">
    <label>Reference*</label>
    [text* reference]
</div>
</div>
<div class="total-amount">
<div class="form-field">
    <label>Paper Description</label>
    [textarea paper-description rows:6]
</div>
<div class="form-field m-top">
    <div class="total-calculation">
    <label class="color-price">Price</label>
    <div class="price-show">
    <span class="pound">£</span>
    [text price id:price readonly placeholder "26.00"]
    </div>
    </div>

    <div class="total-calculation">
    <label class="color-discount">Discount 50%</label>
    <div class="discount-show">
    <span class="pound pound-discount">£</span>
    [text discountPrice id:discount readonly placeholder "13.00"]
    </div>
    </div>

    <div class="total-calculation">
    <label class="color-final">Final Price</label>
    <div class="final-show">
    <span class="pound pound-final">£</span>
    [number finalprice id:finalPrice readonly placeholder "13.00"]
    </div>
    </div>

</div>
</div>
<div class="btn-submit">
[submit class:submit "Submit"]
</div>
