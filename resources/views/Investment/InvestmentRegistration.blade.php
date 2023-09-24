@extends('common.main')
<style>
.larger-textarea {
    height: 150px; 
    font-size: 14px; 
}
.right-corner {
        display: flex;
        justify-content: flex-end;
    }
.error-message {
    color: red;
}
.header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
table {
        border-collapse: collapse;
    }
th, td {
    border: 1px solid black;
    padding: 8px;
}
hr {
    border: 1px solid #ddd;
    margin: 20px 0;
}
</style>
@section('content')
<script>
   let currentTab = 1; // Tracks the current tab
   function validateTab1() 
   {
        const companyName1 = document.getElementById('company_name_1st_option').value;
        const companyName2 = document.getElementById('company_name_2nd_option').value;
        const companyName3 = document.getElementById('company_name_3rd_option').value;
        const tradeName = document.getElementById('trade_name').value;
        const tinNumber = document.getElementById('tin_number').value;
        const generalManager = document.getElementById('general_manager').value;
        const typeOfOwnership = document.getElementById('type_of_ownership').value;
        const businessForm = document.getElementById('businessForm').value;
        const fieldOfBusiness = document.getElementById('field_of_business').value;
        // Clear previous error messages
        const errorContainers = document.querySelectorAll('.error-message');
        errorContainers.forEach(container => {
            container.textContent = '';
        });

        let isValid = true;

        if (companyName1.trim() === '') {
            document.getElementById('company_name_1st_option_name_error').textContent = 'Company Name 1st Option is required.';
            company_name_1st_option.classList.add('is-invalid');
            isValid = false;
        }
        else {
            company_name_1st_option.textContent = '';
            company_name_1st_option.classList.remove('is-invalid');
        }
        if (companyName2.trim() === '') {
            document.getElementById('company_name_2nd_option_name_error').textContent = 'Company Name 2nd Option is required.';
            company_name_2nd_option.classList.add('is-invalid');
            isValid = false;
        }
        else {
            company_name_2nd_option.textContent = '';
            company_name_2nd_option.classList.remove('is-invalid');
        }
        if (companyName3.trim() === '') {
            document.getElementById('company_name_3rd_option_name_error').textContent = 'Company Name 3rd Option is required.';
            company_name_3rd_option.classList.add('is-invalid');
            isValid = false;
        }
        else {
            company_name_3rd_option.textContent = '';
            company_name_3rd_option.classList.remove('is-invalid');
        }
        // Ownership Type
        const typeOfOwnershipSelect = document.getElementById('type_of_ownership');
        const typeOfOwnershipError = document.getElementById('type_of_ownership_error');
        if (typeOfOwnership === 'Choose') {
            typeOfOwnershipError.textContent = 'Type of Ownership is required.';
            typeOfOwnershipSelect.classList.add('is-invalid');
            isValid = false;
        } else {
            typeOfOwnershipError.textContent = '';
            typeOfOwnershipSelect.classList.remove('is-invalid');
        }
        // For business Type
        const fieldOfBusinessSelect = document.getElementById('field_of_business');
        const fieldOfBusinessError = document.getElementById('field_of_business_error');
        if (fieldOfBusiness === 'Choose') {
            fieldOfBusinessError.textContent = 'Field of Business should be selected.';
            fieldOfBusinessSelect.classList.add('is-invalid');
            isValid = false;
        } else {
            fieldOfBusinessError.textContent = '';
            fieldOfBusinessSelect.classList.remove('is-invalid');
        }
        // Business Form
        const ManagerSelect = document.getElementById('general_manager');
        const ManagerError = document.getElementById('general_manager_name_error');
        if (generalManager === 'Choose') {
            ManagerError.textContent = 'General Manager should be selected.';
            ManagerSelect.classList.add('is-invalid');
            isValid = false;
        } else {
            ManagerError.textContent = '';
            ManagerSelect.classList.remove('is-invalid');
        }
        // Business Form
        const formofBusinessSelect = document.getElementById('businessForm');
        const formofBusinessError = document.getElementById('businessForm_error');
        if (businessForm === 'Choose') {
            formofBusinessError.textContent = 'Form of Business is required.';
            formofBusinessSelect.classList.add('is-invalid');
            isValid = false;
        } else {
            formofBusinessError.textContent = '';
            formofBusinessSelect.classList.remove('is-invalid');
        }

        // Similar validation logic for other fields...

        return isValid;
}

function validateTab2() {
    // Clear previous error messages
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    let isValid = true;

    // Address of the Business Organization
    const businessRegion = document.getElementById('business_region').value;
    const businessZone = document.getElementById('business_zone').value;
    const businessWoreda = document.getElementById('business_woreda').value;
    const houseNumber = document.getElementById('business_house_number').value;
    const poBox = document.getElementById('business_PoBox').value;
    const telephone = document.getElementById('business_telephone').value;
    const fax = document.getElementById('business_fax').value;
    const email = document.getElementById('business_email').value;

    // Validate business region, zone, and woreda
    
    if (businessRegion === '') {
        document.getElementById('business_region_error').textContent = 'Region is required.';
        business_region.classList.add('is-invalid');
        isValid = false;
    } 
    else {
        business_region_error.textContent = '';
        business_region.classList.remove('is-invalid');
        }
    if (businessZone === '') {
        document.getElementById('business_zone_error').textContent = 'Zone is required.';
        business_zone.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_zone_error.textContent = '';
        business_zone.classList.remove('is-invalid');
        }
    if (businessWoreda === '') {
        document.getElementById('business_woreda_error').textContent = 'Woreda is required.';
        business_woreda.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_woreda_error.textContent = '';
        business_woreda.classList.remove('is-invalid');
        }
    if (houseNumber === '') {
        document.getElementById('business_house_number_error').textContent = 'House Number  is required.';
        business_house_number.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_house_number_error.textContent = '';
        business_house_number.classList.remove('is-invalid');
        }
    if (poBox === '') {
        document.getElementById('business_PoBox_error').textContent = 'Business P.O.Box  is required.';
        business_PoBox.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_PoBox_error.textContent = '';
        business_PoBox.classList.remove('is-invalid');
        }
    if (telephone === '') {
        document.getElementById('business_telephone_error').textContent = 'Business Telephone  is required.';
        business_telephone.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_telephone_error.textContent = '';
        business_telephone.classList.remove('is-invalid');
        }
    if (fax === '') {
        document.getElementById('business_fax_error').textContent = 'Business Fax  is required.';
        business_fax.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_fax_error.textContent = '';
        business_fax.classList.remove('is-invalid');
        }
    if (email === '') {
        document.getElementById('business_email_error').textContent = 'Business Email  is required.';
        business_email.classList.add('is-invalid');
        isValid = false;
    }
    else {
        business_email_error.textContent = '';
        business_email.classList.remove('is-invalid');
        }
    return isValid;
}
// For Tab 3
function validateTab3() {
    // Clear previous error messages for representative information
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    // Clear previous error messages for investment activities
    const activityErrorContainers = document.querySelectorAll('.activity-error-message');
    activityErrorContainers.forEach(container => {
        container.textContent = '';
    });


    let isValid = true;

    // Representative Information
    const authorized_PersonName = document.getElementById('authorizedPersonName').value;
    const telephone_1 = document.getElementById('authorizedPersontelephone1').value;
    const telephone_2 = document.getElementById('authorizedPersontelephone2').value;
    const authorized_email = document.getElementById('authorizedemail').value;

    // Validate Representative Information
    if (authorized_PersonName === '') {
        document.getElementById('authorizedPersonName_error').textContent = 'Representative Name is required.';
        authorizedPersonName.classList.add('is-invalid');
        isValid = false;
    }
    else {
        authorizedPersonName_error.textContent = '';
        authorizedPersonName.classList.remove('is-invalid');
        }

    if (telephone_1 === '') {
        document.getElementById('authorizedPersontelephone1_error').textContent = 'Telephone 1 is required.';
        authorizedPersontelephone1.classList.add('is-invalid');
        isValid = false;
    }
    else {
        authorizedPersontelephone1_error.textContent = '';
        authorizedPersontelephone1.classList.remove('is-invalid');
        }

    if (telephone_2 === '') {
        document.getElementById('authorizedPersontelephone2_error').textContent = 'Telephone 2 is required.';
        authorizedPersontelephone2.classList.add('is-invalid');
        isValid = false;
    }
    else {
        authorizedPersontelephone2_error.textContent = '';
        authorizedPersontelephone2.classList.remove('is-invalid');
        }

    if (authorized_email === '') {
        document.getElementById('authorizedemail_error').textContent = 'Email is required.';
        authorizedemail.classList.add('is-invalid');
        isValid = false;
    }
    else {
        authorizedemail_error.textContent = '';
        authorizedemail.classList.remove('is-invalid');
        }

    // Investment Activity Validation
    // Validate Investment Activities
    const activityInputs = document.querySelectorAll('#textFieldsContainer input[type="text"]');
    activityInputs.forEach(input => {
        const fieldCounter_error = input.id.replace('activity', ''); // Extract field counter from ID
        const errorContainer = document.getElementById('activity' + fieldCounter_error + '_error');

        const value = input.value.trim();
        if (value === '') {
            errorContainer.textContent = 'This Activity is required.';
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            errorContainer.textContent = '';
            input.classList.remove('is-invalid');
        }
    });


    return isValid;
}
function validateTab4() {
    // Clear previous error messages
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    let isValid = true;
    // Investment Project Location
    const investmentRegion = document.getElementById('investment_region').value;
    const investmeneZone = document.getElementById('investment_zone').value;
    const investmentWoreda = document.getElementById('investment_woreda').value;
    const investmenthouseNumber = document.getElementById('investment_house_number').value;
    const investmentpoBox = document.getElementById('investment_PoBox').value;
    const investmenttelephone = document.getElementById('investment_telephone').value;
    const investmentfax = document.getElementById('investment_fax').value;
    const investmentemail = document.getElementById('investment_email').value;

    // Validate Investment Project Location
    if (investmentRegion === '') {
        document.getElementById('investment_region_error').textContent = 'Region is required.';
        investment_region.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_region_error.textContent = '';
        investment_region.classList.remove('is-invalid');
    }

    if (investmeneZone === '') {
        document.getElementById('investment_zone_error').textContent = 'Zone is required.';
        investment_zone.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_zone_error.textContent = '';
        investment_zone.classList.remove('is-invalid');
    }

    if (investmentWoreda === '') {
        document.getElementById('investment_woreda_error').textContent = 'Woreda is required.';
        investment_woreda.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_woreda_error.textContent = '';
        investment_woreda.classList.remove('is-invalid');
    }

    // Validate other fields
    if (investmenthouseNumber === '') {
        document.getElementById('investment_house_number_error').textContent = 'House Number is required.';
        investment_house_number.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_house_number_error.textContent = '';
        investment_house_number.classList.remove('is-invalid');
    }

    if (investmentpoBox === '') {
        document.getElementById('investment_PoBox_error').textContent = 'P.O.Box is required.';
        investment_PoBox.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_PoBox_error.textContent = '';
        investment_PoBox.classList.remove('is-invalid');
    }

    if (investmenttelephone === '') {
        document.getElementById('investment_telephone_error').textContent = 'Telephone is required.';
        investment_telephone.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_telephone_error.textContent = '';
        investment_telephone.classList.remove('is-invalid');
    }

    if (investmentfax === '') {
        document.getElementById('investment_fax_error').textContent = 'FAX is required.';
        investment_fax.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_fax_error.textContent = '';
        investment_fax.classList.remove('is-invalid');
    }
    if (investmentemail === '') {
        document.getElementById('investment_email_error').textContent = 'Email is required.';
        investment_email.classList.add('is-invalid');
        isValid = false;
    } else {
        investment_email_error.textContent = '';
        investment_email.classList.remove('is-invalid');
    }

    return isValid;
}
function validateTab5() {
    // Clear previous error messages
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    let isValid = true;

    // Project Objective
    const projectobjective = document.getElementById('project_objective').value;

    // Utility Requirements
    const landRequirement = document.getElementById('land_requirement').value;
    const electricRequirement = document.getElementById('electric_requirement').value;
    const waterutility = document.getElementById('water_requirement').value;
    const internetutility = document.getElementById('internet_requirement').value;
    const otherUtility = document.getElementById('other_requirement').value;

    // Planned Investment Capital
    const usadollar = document.getElementById('usa_dollar').value;
    const ethiopianbirr = document.getElementById('ethiopian_birr').value;

    // Validate Project Objective
    if (landRequirement === '') {
        document.getElementById('land_requirement_error').textContent = 'Land Requirement is required.';
        land_requirement.classList.add('is-invalid');
        isValid = false;
    } else {
        land_requirement_error.textContent = '';
        land_requirement.classList.remove('is-invalid');
    }
    if (projectobjective === '') {
        document.getElementById('project_objective_error').textContent = 'Project Objective is required.';
        project_objective.classList.add('is-invalid');
        isValid = false;
    } else {
        project_objective_error.textContent = '';
        project_objective.classList.remove('is-invalid');
    }
    if (electricRequirement === '') {
        document.getElementById('electric_requirement_error').textContent = 'Electric Power Requirement is required.';
        electric_requirement.classList.add('is-invalid');
        isValid = false;
    } else {
        electric_requirement_error.textContent = '';
        electric_requirement.classList.remove('is-invalid');
    }

    if (waterutility === '') {
        document.getElementById('water_requirement_error').textContent = 'Water Utility Requirement is required.';
        water_requirement.classList.add('is-invalid');
        isValid = false;
    } else {
        water_requirement_error.textContent = '';
        water_requirement.classList.remove('is-invalid');
    }

    if (internetutility === '') {
        document.getElementById('internet_requirement_error').textContent = 'Internet Utility Requirement is required.';
        internet_requirement.classList.add('is-invalid');
        isValid = false;
    } else {
        internet_requirement_error.textContent = '';
        internet_requirement.classList.remove('is-invalid');
    }

    // Validate Planned Investment Capital
    if (usadollar === '') {
        document.getElementById('usa_dollar_error').textContent = 'Amount in USA Dollar is required.';
        usa_dollar.classList.add('is-invalid');
        isValid = false;
    } else {
        usa_dollar_error.textContent = '';
        usa_dollar.classList.remove('is-invalid');
    }

    if (ethiopianbirr === '') {
        document.getElementById('ethiopian_birr_error').textContent = 'Amount in Ethiopian Birr is required.';
        ethiopian_birr.classList.add('is-invalid');
        isValid = false;
    } else {
        ethiopian_birr_error.textContent = '';
        ethiopian_birr.classList.remove('is-invalid');
    }
   
    return isValid;
}
function validateTab6() {
    const Equity = document.getElementById('equity').value;
    const Loan = document.getElementById('loan').value;
    const ExportValue = document.getElementById('exportValue').value;
    const Local = document.getElementById('local').value;
    const PermanentEmployee = document.getElementById('permanent_employee').value;
    const ProductRows = document.querySelectorAll('#productTable tbody tr').value;
    
    // Clear previous error messages
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    let isValid = true;

    const productNameInputs = document.querySelectorAll('#productTable select[name="productName"]');
    const unitInputs = document.querySelectorAll('#productTable select[name="unit"]');
    const quantityInputs = document.querySelectorAll('#productTable input[name="Quantity"]');
    const localMarketShareInputs = document.querySelectorAll('#productTable input[name="localMarketShare"]');
    const exportMarketShareInputs = document.querySelectorAll('#productTable input[name="exportMarketShare"]');

    // Validate Equity
    if (Equity=== '') {
        document.getElementById('equity').textContent = 'Equity is required..';
        equity.classList.add('is-invalid');
        isValid = false;
    } else {
        equity_error.textContent = '';
        equity.classList.remove('is-invalid');
    }
     // Validate Loan
     if (Loan === '') {
        document.getElementById('loan').textContent = 'Equity is required..';
        loan.classList.add('is-invalid');
        isValid = false;
    } else {
        loan_error.textContent = '';
        loan.classList.remove('is-invalid');
    }
    if (ExportValue === '') {
        document.getElementById('exportValue').textContent = 'Equity is required..';
        exportValue.classList.add('is-invalid');
        isValid = false;
    } else {
        exportValue_error.textContent = '';
        exportValue.classList.remove('is-invalid');
    }
    // Validate Local Market
    if (Local=== '') {
        document.getElementById('local').textContent = 'Equity is required..';
        local.classList.add('is-invalid');
        isValid = false;
    } else {
        local_error.textContent = '';
        local.classList.remove('is-invalid');
    }
     // Validate Permanent Employee
     if (PermanentEmployee === '') {
        document.getElementById('permanent_employee').textContent = 'Equity is required..';
        permanent_employee.classList.add('is-invalid');
        isValid = false;
    } else {
        permanent_employee_error.textContent = '';
        permanent_employee.classList.remove('is-invalid');
    }
    

    productNameInputs.forEach((input, index) => {
        const product_name = input.value.trim();
        if (product_name === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Product Name is required.';
            isValid = false;
        }
     });
     unitInputs.forEach((input, index) => {
        const unit = input.value.trim();
        //const unit = unitInputs[index].value.trim();
        const quantity = quantityInputs[index].value.trim();
        const localMarketShare = localMarketShareInputs[index].value.trim();
        const exportMarketShare = exportMarketShareInputs[index].value.trim();

        if (unit === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'unit is required.';
            isValid = false;
        }
     });

    return isValid;
}

function validateTab7() {
    // Clear previous error messages
    const errorContainers = document.querySelectorAll('.error-message');
    errorContainers.forEach(container => {
        container.textContent = '';
    });

    let isValid = true;
    const rawMaterialNameSelects = document.querySelectorAll('#rawMaterialTable select[name="rawMaterialName"]');
    const rawunitInputs = document.querySelectorAll('#rawMaterialTable select[name="unit"]');
    const rawquantityInputs = document.querySelectorAll('#rawMaterialTable input[name="Quantity"]');
    const localPercent = document.querySelectorAll('#rawMaterialTable input[name="Local"]');
    const importedPercent = document.querySelectorAll('#rawMaterialTable input[name="imported"]');

    rawMaterialNameSelects.forEach((input, index) => {
        const RawMaterialName = input.value;
        if (RawMaterialName === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Raw Material Name is required.';
            isValid = false;
        }
     });
     rawunitInputs.forEach((input, index) => {
        const rawUnit = input.value.trim();
        if (rawUnit === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Unit is required.';
            isValid = false;
        }
     });
     rawquantityInputs.forEach((input, index) => {
        const rawquantity = input.value.trim();
        if (rawquantity === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Quantity is required.';
            isValid = false;
        }
     });
     localPercent.forEach((input, index) => {
        const rawlocal = input.value.trim();
        if (rawlocal === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Local is required.';
            isValid = false;
        }
     });
     importedPercent.forEach((input, index) => {
        const rawimported = input.value.trim();
        if (rawimported === '') {
            // Display error message for productName
            const errorContainer = input.parentElement.querySelector('.error-message');
            errorContainer.textContent = 'Imported percentage is required.';
            isValid = false;
        }
     });
    // Potential Impact Validation mitigation
    
    const potentialImpact = document.getElementById('potential_impact').value.trim();
    if (potentialImpact === '') {
        document.getElementById('potential_impact_error').textContent = 'Potential Impact is Required';
        potential_impact.classList.add('is-invalid');
        isValid = false;
    } else {
        potential_impact_error.textContent = '';
        potential_impact.classList.remove('is-invalid');
    }

    //  mitigation
    
    const mitigationPlan = document.getElementById('mitigation').value.trim();
    if (mitigationPlan === '') {
        document.getElementById('mitigation_error').textContent = 'Mitigation Plan is Required';
        mitigation.classList.add('is-invalid');
        isValid = false;
    } else {
        mitigation_error.textContent = '';
        mitigation.classList.remove('is-invalid');
    }

    // Where did you get information about EIC Validation
    const where_you_get_info = document.getElementById('where_info').value;
    if (where_you_get_info === 'Choose') {
        document.getElementById('where_info_error').textContent = 'Please select where you get information';
        where_info.classList.add('is-invalid');
        isValid = false;
    } else {
        where_info_error.textContent = '';
        where_info.classList.remove('is-invalid');
    }

    // File Input Validation
    const FileInput = document.getElementById('fileInput');
    if (FileInput.files.length === 0) {
        const errorContainer = fileInput.parentElement.nextElementSibling.querySelector('.error-message');
        errorContainer.textContent = 'Please attach a file.';
        fileInput.classList.add('is-invalid');
        isValid = false;
    } else {
        fileInput.classList.remove('is-invalid');
        const errorContainer = fileInput.parentElement.nextElementSibling.querySelector('.error-message');
        errorContainer.textContent = ''; // Clear error message when validation passes
    }

    return isValid;
}






    // Function to show the specified tab
    function showTab(tabIndex) {

    if (tabIndex === 2 && !validateTab1()) {
    return; // Stop if validation fails for tab 1
    }
    if (tabIndex === 3 && !validateTab2()) {
        return; // Stop if validation fails for tab 2
    }
    if (tabIndex === 4 && !validateTab3()) {
        return; // Stop if validation fails for tab 3
    }
    if (tabIndex === 5 && !validateTab4()) {
        return; // Stop if validation fails for tab 4
    }
    if (tabIndex === 6 && !validateTab5()) {
        return; // Stop if validation fails for tab 5
    }
    if (tabIndex === 7 && !validateTab6()) {
        return; // Stop if validation fails for tab 6
    }
    
    // Hide the current tab
    document.getElementById('tab' + currentTab).classList.remove('show', 'active');
    // Show the selected tab
    document.getElementById('tab' + tabIndex).classList.add('show', 'active');
    // Update the current tab
    currentTab = tabIndex;

       
    }
    function addRawMaterialRow() {
    const rawMaterialTable = document.getElementById("rawMaterialTable");
    const newRow = rawMaterialTable.insertRow();

    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
    const cell5 = newRow.insertCell(4);
    const cell6 = newRow.insertCell(5);

    const selectOptions = @json($Materials);

        const selectHtml = `
            <select name="rawMaterialName" class="raw-material-name" required>
                <option value="">Select a raw material</option>
                ${selectOptions.map(material => `<option value="${material.id}">${material.name}</option>`).join('')}
            </select>
        `;

    cell1.innerHTML = selectHtml;
    const selectOptionsUnits = @json($Measurements);
    const selectHtmlUnits = `
        <select name="unit" class="unit" required>
            <option value="">Select a unit</option>
            ${selectOptionsUnits.map(measurement => `<option value="${measurement.id}">${measurement.name}</option>`).join('')}
        </select>
    `;
    cell2.innerHTML = selectHtmlUnits;
    cell3.innerHTML = '<input type="number" name="Quantity" class="quantity" required>';
    cell4.innerHTML = '<input type="number" name="Local" class="local-percent" required>';
    cell5.innerHTML = '<input type="number" name="imported" class="imported-percent" required>';
    cell6.innerHTML = '<button type="button" onclick="removeProductRow(this)">Remove</button>';

    // Add error message containers for each input field
    const errorContainer1 = document.createElement('div');
    errorContainer1.className = 'error-message';
    cell1.appendChild(errorContainer1);

    const errorContainer2 = document.createElement('div');
    errorContainer2.className = 'error-message';
    cell2.appendChild(errorContainer2);

    const errorContainer3 = document.createElement('div');
    errorContainer3.className = 'error-message';
    cell3.appendChild(errorContainer3);

    const errorContainer4 = document.createElement('div');
    errorContainer4.className = 'error-message';
    cell4.appendChild(errorContainer4);

    const errorContainer5 = document.createElement('div');
    errorContainer5.className = 'error-message';
    cell5.appendChild(errorContainer5);
}

    


       // To add product to table
       function addProductRow() {
    const productTable = document.getElementById("productTable");
    const newRow = productTable.insertRow();

    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
    const cell5 = newRow.insertCell(4);
    const cell6 = newRow.insertCell(5);

    const selectOptions = @json($Items);

        const selectHtml = `
            <select name="productName" class="raw-material-name" required>
                <option value="">Select a raw material</option>
                ${selectOptions.map(item => `<option value="${item.id}">${item.name}</option>`).join('')}
            </select>
        `;

    cell1.innerHTML = selectHtml;
    const selectOptionsUnits = @json($Measurements);
    const selectHtmlUnits = `
        <select name="unit" class="unit" required>
            <option value="">Select a unit</option>
            ${selectOptionsUnits.map(measurement => `<option value="${measurement.id}">${measurement.name}</option>`).join('')}
        </select>
    `;
    cell2.innerHTML = selectHtmlUnits;
    cell3.innerHTML = '<input type="number" name="Quantity" class="quantity" required>';
    cell4.innerHTML = '<input type="number" name="localMarketShare" class="local-share" required>';
    cell5.innerHTML = '<input type="number" name="exportMarketShare" class="export-share" required>';
    cell6.innerHTML = '<button type="button" onclick="removeProductRow(this)">Remove</button>';

    // Add error message containers for each input field
    const errorContainer1 = document.createElement('div');
    errorContainer1.className = 'error-message';
    cell1.appendChild(errorContainer1);

    const errorContainer2 = document.createElement('div');
    errorContainer2.className = 'error-message';
    cell2.appendChild(errorContainer2);

    const errorContainer3 = document.createElement('div');
    errorContainer3.className = 'error-message';
    cell3.appendChild(errorContainer3);

    const errorContainer4 = document.createElement('div');
    errorContainer4.className = 'error-message';
    cell4.appendChild(errorContainer4);

    const errorContainer5 = document.createElement('div');
    errorContainer5.className = 'error-message';
    cell5.appendChild(errorContainer5);
}

        function removeProductRow(button) {
            const row = button.parentNode.parentNode;
            const table = row.parentNode;
            table.deleteRow(row.rowIndex);
        }

        function getTableData() {
            const productTable = document.getElementById("productTable");
            const rows = productTable.rows;

            const data = [];
            for (let i = 1; i < rows.length; i++) { // Skip header row
                const row = rows[i];
                const inputs = row.getElementsByTagName("input");
                const rowData = {
                    productName: inputs[0].value,
                    unit: inputs[1].value,
                    Quantity: inputs[2].value,
                    localMarketShare: inputs[3].value,
                    exportMarketShare: inputs[4].value
                };
                data.push(rowData);
            }

            console.log(data);
        }

        
        function submitAllForms()
       {
            if (!validateTab7()) {
            return; // Stop if validation fails for tab 1
            }
            // Tab 1 Form
            const companyName1 = document.getElementById('company_name_1st_option').value;
            const companyName2 = document.getElementById('company_name_2nd_option').value;
            const companyName3 = document.getElementById('company_name_3rd_option').value;
            const tradeName = document.getElementById('trade_name').value;
            const tinNumber = document.getElementById('tin_number').value;
            const generalManager = document.getElementById('general_manager').value;
            const typeOfOwnership = document.getElementById('type_of_ownership').value;
            const businessForm = document.getElementById('businessForm').value;
            const fieldOfBusiness = document.getElementById('field_of_business').value;

            //Tab 2 Form
            // Address of the Business Organization
            const businessRegion = document.getElementById('business_region').value;
            const businessZone = document.getElementById('business_zone').value;
            const businessWoreda = document.getElementById('business_woreda').value;
            const houseNumber = document.getElementById('business_house_number').value;
            const poBox = document.getElementById('business_PoBox').value;
            const telephone = document.getElementById('business_telephone').value;
            const fax = document.getElementById('business_fax').value;
            const email = document.getElementById('business_email').value;

            // Tab 3
            // Representative Information
            const authorized_PersonName = document.getElementById('authorizedPersonName').value;
            const telephone_1 = document.getElementById('authorizedPersontelephone1').value;
            const telephone_2 = document.getElementById('authorizedPersontelephone2').value;
            const authorized_email = document.getElementById('authorizedemail').value;
             // Investment Activity should come here
             const investment_activity = {}; // Initialize the object

            for (let i = 1; i <= fieldCounter; i++) {
                const inputField = document.getElementById('activity' + i);
                const activityTypeRadio = document.querySelector('input[name="activityType' + i + '"]:checked');

                if (inputField && activityTypeRadio) {
                    investment_activity['activity' + i] = {
                        value: inputField.value,
                        type: activityTypeRadio.value
                    };
                }
            }

            // Product or Item data
            const Product_info = []; // Object to store the form data
            const productNameInputs = document.querySelectorAll('#productTable select[name="productName"]');
            const unitInputs = document.querySelectorAll('#productTable select[name="unit"]');
            const quantityInputs = document.querySelectorAll('#productTable input[name="Quantity"]');
            const localMarketShareInputs = document.querySelectorAll('#productTable input[name="localMarketShare"]');
            const exportMarketShareInputs = document.querySelectorAll('#productTable input[name="exportMarketShare"]');
            productNameInputs.forEach((input, index) => {
                const productData = {
                PName: input.value.trim(),
                unit: unitInputs[index].value.trim(),
                quantity: quantityInputs[index].value.trim(),
                localMarketShare: localMarketShareInputs[index].value.trim(),
                exportMarketShare: exportMarketShareInputs[index].value.trim()
            };
            Product_info.push(productData);
            });

             // Raw Material Inputs
             const RawMaterial_info = [];
            const rawMaterialNameSelects = document.querySelectorAll('#rawMaterialTable select[name="rawMaterialName"]');
            const rawunitInputs = document.querySelectorAll('#rawMaterialTable select[name="unit"]');
            const rawquantityInputs = document.querySelectorAll('#rawMaterialTable input[name="Quantity"]');
            const localPercent = document.querySelectorAll('#rawMaterialTable input[name="Local"]');
            const importedPercent = document.querySelectorAll('#rawMaterialTable input[name="imported"]');

            rawMaterialNameSelects.forEach((input, index) => {
                const RawMaterialData = {
                RMaterialName: input.value.trim(),
                unit: rawunitInputs[index].value.trim(),
                quantity: rawquantityInputs[index].value.trim(),
                localPercent: localPercent[index].value.trim(),
                exportedPercent: importedPercent[index].value.trim()
            };
            RawMaterial_info.push(RawMaterialData);
            });
            // Tab 4
            // Investment Project Location
            const investmentRegion = document.getElementById('investment_region').value;
            const investmentZone = document.getElementById('investment_zone').value;
            const investmentWoreda = document.getElementById('investment_woreda').value;
            const investmenthouseNumber = document.getElementById('investment_house_number').value;
            const investmentpoBox = document.getElementById('investment_PoBox').value;
            const investmenttelephone = document.getElementById('investment_telephone').value;
            const investmentfax = document.getElementById('investment_fax').value;
            const investmentemail = document.getElementById('investment_email').value;

            //Tab 5
            // Project Objective
            const projectobjective = document.getElementById('project_objective').value;

            // Utility Requirements
            const landRequirement = document.getElementById('land_requirement').value;
            const electricRequirement = document.getElementById('electric_requirement').value;
            const waterutility = document.getElementById('water_requirement').value;
            const internetutility = document.getElementById('internet_requirement').value;
            const otherUtility = document.getElementById('other_requirement').value;

            // Planned Investment Capital
            const usadollar = document.getElementById('usa_dollar').value;
            const ethiopianbirr = document.getElementById('ethiopian_birr').value;

            //Tab 6
            const Equity = document.getElementById('equity').value;
            const Loan = document.getElementById('loan').value;
            const ExportValue = document.getElementById('exportValue').value;
            const Local = document.getElementById('local').value;
            const PermanentEmployee = document.getElementById('permanent_employee').value;
            // Tab 7
            const potentialimpact = document.getElementById('potential_impact').value.trim();
            const mitigation_plan = document.getElementById('mitigation').value.trim();
            const FileInput = document.getElementById('fileInput');
            const where_you_get_info = document.getElementById('where_info').value;
            // Submit the combined form data to the single URL
            const formData = {
                    // Tab 1 Form
                    companyName1: companyName1,
                    companyName2: companyName2,
                    companyName3: companyName3,
                    tradeName: tradeName,
                    tinNumber: tinNumber,
                    generalManager: generalManager,
                    typeOfOwnership: typeOfOwnership,
                    businessForm: businessForm,
                    fieldOfBusiness: fieldOfBusiness,
                    // Tab 2 Form
                    businessRegion: businessRegion,
                    businessZone: businessZone,
                    businessWoreda: businessWoreda,
                    houseNumber: houseNumber,
                    poBox: poBox,
                    telephone: telephone,
                    fax: fax,
                    email: email,

                    //Tab 3 
                    Authorized_PersonId:authorized_PersonName,
                    telephone_1:telephone_1,
                    telephone_2:telephone_2,
                    authorized_email:authorized_email,
                    
                    //Tab 4
                    investmentRegion:investmentRegion,
                    investmentZone:investmentZone,
                    investmentWoreda:investmentWoreda,
                    investmentHouseNumber:investmenthouseNumber,
                    investmentPoBox:investmentpoBox,
                    investmentTelephone:investmenttelephone,
                    investmentFax:investmentfax,
                    investmentemail:investmentemail,

                    // Tab 5
                   projectObjective: projectobjective,
                   landRequirement:landRequirement,
                   electricRequirement:electricRequirement,
                   waterutility:waterutility,
                   internetutility:internetutility,
                   otherutility:otherUtility,
                   usaDollar:usadollar,
                   ethiopianBirr: ethiopianbirr,

                   //Tab 6 
                   equity:Equity,
                   loan:Loan,
                   exportValue:ExportValue,
                   local:Local,
                   permanentEmployee:PermanentEmployee,
                
                  //Tab 7
                   potentialImpact:potentialimpact,
                   mitigationPlan:mitigation_plan,
                   //file_attached:FileInput,
                   source_info:where_you_get_info,            
                    // ... (continue with the rest of the form data properties)
                }; 
                var fileInput = document.getElementById('fileInput');
                var file = fileInput.files[0];
                // Create a FileReader to read the file as a Base64 encoded string
                var reader = new FileReader();
                reader.onload = function(event) {
                var base64File = event.target.result;
                
                // Construct the JSON object including the file data
                var jsonData = {
                    RawMaterial_info: RawMaterial_info,
                    formData1: formData, // Replace with the actual form data value
                    formData2: investment_activity,
                    formData3: Product_info,
                    file: base64File,
                    _token: $('meta[name="csrf-token"]').attr('content') // Include the CSRF token in the data
                };

                    // Send the AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '/investment/request_and_view_investment',
                        data: JSON.stringify(jsonData),
                        contentType: 'application/json',
                        success: function(response) {
                            const registrationForm = document.getElementById("generalForm");
                            showSuccessMessage(response.message);
                            resetForms(); 
                            setTimeout(function() {
                                location.reload();

                            }, 2500);

                        },
                        error: function(error) {
                            // Handle errors
                            showErrorMessage("Error Occured While Registering The Form");
                        }
                    });
                };
                // Read the file as a Base64 encoded string
                reader.readAsDataURL(file);
        }

</script>

<div class="container" id = "generalForm">  
        <!-- Add Bootstrap tabs -->
        <div class = "header-container">
                    <h2 style = "text-align:center">Investment Application Form</h2>
                <div class="d-flex justify-content-center right-corner">
                    <button type="button" class="btn btn-primary" onclick="alert('0K')">View Investment</button>
                </div>   
        </div>

        <!-- Tab content -->
        <div class="tab-content mt-3">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1">
                <form action="#" id = "tab1_form">
                 @csrf                    <!-- Your form fields for tab 1 -->
                    <h4 style = "text-align:center">Select Company Name for your Investment</h4>
                    <hr>
                    <div class="row mb-3">
                        <label for="company_name_1st_option" class="col-sm-3 col-form-label input-group-text"><strong>Company Name 1st Option</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control is_valid" id="company_name_1st_option" placeholder="Enter Company Name Your 1st Option" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="company_name_1st_option_name_error"></div>
                        </div>
                    </div>


                        <div class="row mb-3">
                            <label for="company_name_2nd_option" class="col-sm-3 col-form-label input-group-text"><strong>Company Name 2nd Option</strong></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="company_name_2nd_option" placeholder="Enter Company Name Your 2nd Option" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="error-message" id="company_name_2nd_option_name_error"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company_name_3rd_option" class="col-sm-3 col-form-label input-group-text"><strong>Company Name 3rd Option</strong></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control " id="company_name_3rd_option" placeholder="Enter Company Name Your 3rd Option" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="error-message" id="company_name_3rd_option_name_error"></div>
                            </div>
                        </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="trade_name" class="col-sm-3 col-form-label input-group-text"><strong>Trade Name</strong></label>
                                    <div class="col-sm-6">
                                        <div class="input-group flex-fill">
                                            <input type="text" class="form-control" id="trade_name" placeholder="Enter Trade Name if any" >
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="error-message" id="trade_name_error"></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tin_number" class="col-sm-3 col-form-label input-group-text"><strong>TIN Number</strong></label>
                                    <div class="col-sm-6">
                                        <div class="input-group flex-fill">
                                            <input type="number" class="form-control" id="tin_number" placeholder="Enter Tin Number" >
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="error-message" id="tin_number_error"></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="general_manager" class="col-sm-3 col-form-label input-group-text"><strong>Manager Name</strong></label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <select  class="form-select  validate-select" id="general_manager">
                                                <option value="">Select a customer</option>
                                                @foreach ($managers as $manager)
                                                    <option value="{{ $manager->id }}">{{ $manager->user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="error-message" id="general_manager_name_error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="type_of_ownership"><strong>Type of Ownership</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <select class="form-select  validate-select" id="type_of_ownership">
                                    <option selected>Choose</option>
                                    <option value="domestic">Domestic</option>
                                    <option value="foreign">Foreign</option>
                                    <option value="joint_investment">Joint Investment</option>
                                    <option value="branch">Branch</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="type_of_ownership_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="businessForm"><strong>Select Business Form</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <select id="businessForm" class="form-select">
                                    <option selected>Choose</option>
                                 
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="businessForm_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="field_of_business"><strong>Select Field of Business</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <select id="field_of_business" class="form-select">
                                    <option selected>Choose</option>
                                 
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="field_of_business_error"></div>
                        </div>
                    </div>
                    <hr>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success" onclick="showTab(2)">Next</button>
                        </div>
                </form>
            </div>

            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2">
                <form action="#" id = "tab2_form">
                @csrf                    
                    <h3 style = "text-align:center">Address of the Business Organization </h3> 
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="region"><strong>Select Region</strong></label>
                        <div class="col-sm-6">
                            <select id="business_region" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_region_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="business_zone"><strong>Select Zone</strong></label>
                        <div class="col-sm-6">
                            <select id="business_zone" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Zones as $zone)
                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_zone_error"></div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="business_woreda"><strong>Select Woreda</strong></label>
                        <div class="col-sm-6">
                            <select id="business_woreda" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Woredas as $woreda)
                                    <option value="{{ $woreda->id }}">{{ $woreda->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_woreda_error"></div>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <label for="house_number" class="col-sm-3 col-form-label input-group-text"><strong>House Number</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="business_house_number" placeholder="Enter House Number">
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_house_number_error"></div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="PoBox" class="col-sm-3 col-form-label input-group-text"><strong>P.O.Box</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="business_PoBox" placeholder="Enter P.O.Box">
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_PoBox_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="business_telephone" class="col-sm-3 col-form-label input-group-text"><strong>Tele Phone</strong></label>
                        <div class="col-sm-6">
                            <input type="tel" class="form-control" id="business_telephone" placeholder="Enter Telephone">
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_telephone_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="business_fax" class="col-sm-3 col-form-label input-group-text"><strong>FAX</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="business_fax" placeholder="Enter FAX">
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_fax_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label input-group-text"><strong>Email</strong></label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="business_email" placeholder="Enter Email">
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="business_email_error"></div>
                        </div>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab + 1)">Next</button>
                    </div> 
                </form>
            </div>
            <!-- Tab 3 -->
            <div class="tab-pane fade" id="tab3">
                <form action="#" id = "tab3_form">
                @csrf                    
                    <h2 style = "text-align:center">Address of authorized representative </h2>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label input-group-text" for="zone"><strong>Company Representative</strong></label>
                            <div class="col-sm-6">
                                <select id="authorizedPersonName" class="form-select">
                                    <option value="">choose</option>
                                    @foreach ($managers as $manager)
                                        <option value="{{ $manager->id }}">{{ $manager->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="error-message" id="authorizedPersonName_error"></div>
                            </div>
                         </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="telephone1"><strong>Tele Phone 1</strong></label>
                        <div class="col-sm-6">
                            <input type="tel" class="form-control" id="authorizedPersontelephone1" placeholder="Enter Telephone">
                        </div>
                        <div class="col-sm-3">
                               <div class="error-message" id="authorizedPersontelephone1_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="telephone2"><strong>Tele Phone 2</strong></label>
                        <div class="col-sm-6">
                            <input type="tel" class="form-control" id="authorizedPersontelephone2" placeholder="Enter Telephone">
                        </div>
                        <div class="col-sm-3">
                               <div class="error-message" id="authorizedPersontelephone2_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="authorizedemail"><strong>Email</strong></label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="authorizedemail" placeholder="Enter Email">
                        </div>
                        <div class="col-sm-3">
                             <div class="error-message" id="authorizedemail_error"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <h2 style = "text-align:center">Investment Activity</h2>

                        <div id="textFieldsContainer" class="mb-3">
                        </div>
                        <hr>
                        <button id="addFieldButton" class = "btn btn-primary">Add Investment Activity</button>
                    </div> 
                    <hr>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab + 1)">Next</button>
                    </div>
                </form>
            </div>
             <!-- tab 4 -->
            <div class="tab-pane fade" id="tab4">
                <form action="#" id = "tab4_form">
                @csrf                    
                    <h2 style = "text-align:center">Investment Project Location  </h2> 
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="region"><strong>Select Region</strong></label>
                        <div class="col-sm-6">
                            <select id="investment_region" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="investment_region_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="zone"><strong>Select Zone</strong></label>
                        <div class="col-sm-6">
                            <select id="investment_zone" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Zones as $zone)
                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="investment_zone_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="woreda"><strong>Select Woreda</strong></label>
                        <div class="col-sm-6">
                            <select id="investment_woreda" class="form-select">
                                <option value="">choose</option>
                                @foreach ($Woredas as $woreda)
                                    <option value="{{ $woreda->id }}">{{ $woreda->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="investment_woreda_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="house_number"><strong>House Number</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="investment_house_number" placeholder="Enter House Number">
                        </div>
                        <div class="col-sm-3">
                             <div class="error-message" id="investment_house_number_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="PoBox"><strong>P.O.Box</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="investment_PoBox" placeholder="Enter P.O.Box">
                        </div>
                        <div class="col-sm-3">
                              <div class="error-message" id="investment_PoBox_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="telephone"><strong>Tele Phone</strong></label>
                        <div class="col-sm-6">
                            <input type="tel" class="form-control" id="investment_telephone" placeholder="Enter Telephone">
                        </div>
                        <div class="col-sm-3">
                             <div class="error-message" id="investment_telephone_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="fax"><strong>FAX</strong></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="investment_fax" placeholder="Enter FAX">
                        </div>
                        <div class="col-sm-3">
                              <div class="error-message" id="investment_fax_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="email"><strong>Email</strong></label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="investment_email" placeholder="Enter Email">
                        </div>
                        <div class="col-sm-3">
                             <div class="error-message" id="investment_email_error"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab + 1)">Next</button>
                    </div> 
                </form>                     
            </div>

              <!-- Tab 5-->
            <div class="tab-pane fade" id="tab5">
                 <form action="#" id = "tab5_form">
                 @csrf   
                 <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="Poject_objective"><strong>Write Project Objective</strong></label>                 
                    <div class="col-sm-8"> 
                        <textarea class="form-control larger-textarea" id="project_objective" placeholder="Project Objective" rows="6" cols="60"></textarea>
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="project_objective_error"></div>
                    </div>
                </div>
                    <h3 style ="text-align:center">Utility Requirements </h3> 
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="land"><strong>Land utility</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="land_requirement" placeholder="Enter Land Requirement in Meter square">
                                <span class="input-group-text">M<sup>2</sup></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                                 <div class="error-message" id="land_requirement_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="electric_power"><strong>Electric Power</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="electric_requirement" placeholder="Enter Electric Power utility in kw per year">
                                <span class="input-group-text">KW/Year</span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                                  <div class="error-message" id="electric_requirement_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="water_requirement"><strong>Water Utility</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="water_requirement" placeholder="Enter Water utility in M3 per year">
                                <span class="input-group-text">M<sup>3</sup>/Year</span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                                 <div class="error-message" id="water_requirement_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="internet_utility"><strong>Internet Utility</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="internet_requirement" placeholder="Enter Internet utility in MB per Month">
                                <span class="input-group-text">MB/Month</span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                                 <div class="error-message" id="internet_requirement_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="other_utility"><strong>Others (if any)</strong></label>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <input type="text" class="form-control" id="other_requirement" placeholder="Enter other utility along with its units">
                            </div>
                        </div>
                        <div class="col-sm-3">
                                 <div class="error-message" id="other_requirement_error"></div>
                        </div>
                    </div>

                    <h4 style ="text-align:center">Amount of planned investment capital (in United States Dollar and Ethiopian Birr)</h4>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="usa_dollar"><strong>In USA Dollar</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="usa_dollar" placeholder="Enter in USA Dollar">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="error-message" id="usa_dollar_error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="ethiopian_birr"><strong>Ethiopian Birr</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="ethiopian_birr" placeholder="Enter In Ethiopian Birr">
                            </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="error-message" id="ethiopian_birr_error"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab + 1)">Next</button>
                    </div>
                </form>
            </div>
              <!-- Tab 6-->
            <div class="tab-pane fade" id="tab6">
                <form action="#" id = "tab6_form">
                @csrf                    
                    <h4 style ="text-align:center">Source of Finance</h4>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="equity"><strong>Equity</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="equity" placeholder="Enter Equity">
                            </div>
                            <div class="col-sm-3">
                                 <div class="error-message" id="equity_error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="loan"><strong>Loan</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="loan" placeholder="Enter In Ethiopian Birr">
                            </div>
                            <div class="col-sm-3">
                                  <div class="error-message" id="loan_error"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 style ="text-align:center">Market Destination</h4>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="export"><strong>Export</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="exportValue" placeholder="Enter Export">
                            </div>
                            <div class="col-sm-3">
                                <div class="error-message" id="exportValue_error"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="local"><strong>Local</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="local" placeholder="Enter Local">
                            </div>
                            <div class="col-sm-3">
                                  <div class="error-message" id="local_error"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label input-group-text" for="permanent_employee"><strong>Permanent Employee</strong></label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="number" class="form-control" id="permanent_employee" placeholder="Enter Permanent Employee">
                            </div>
                            <div class="col-sm-3">
                                  <div class="error-message" id="permanent_employee_error"></div>
                            </div>
                        </div>
                    </div>
                    <h4 style ="text-align:center">Estimated annual production/service rendering of the project at full capacity</h4>
                        <div class="table-responsive">    
                            <table id="productTable" class = "table table-striped">
                                <tr>
                                    <th>Product/Service Name</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Local Market Share</th>
                                    <th>Export Market Share</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                            <hr>
                            <button type="button" onclick="addProductRow()">Add Product</button>
                            <hr>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                        <button type="button" class="btn btn-success" onclick="showTab(currentTab + 1)">Next</button>
                    </div>
                </form>
            </div>
            <!-- Tab 7 -->
                <div class="tab-pane fade" id="tab7">
                   <form id = "tab7_form">
                    @csrf                    
                        <h4 style ="text-align:center">Raw material requirements at full capacity </h4>
                        <div class="table-responsive">
                                <table id="rawMaterialTable" class = "table table-striped">
                                    <tr>
                                        <th>Raw Material Name</th>
                                        <th>Unit</th>
                                        <th>Quantity</th>
                                        <th>Sourced From Local (Percent)</th>
                                        <th>Imported (Percent)</th>
                                        <th>Action</th>
                                    </tr>
                                </table>
                            </div>
                            <button type="button" onclick="addRawMaterialRow()">Add Raw Material</button>
                            <hr>
                            <h4 style ="text-align:center">Brief description about the potential impact of the proposed investment on environment and measures of mitigation to be undertaken </h4>
                            <div class="input-group mb-3"> 
                                <label class="input-group-text col-sm-3" for="potential_impact"><strong>Write Potential Impact</strong></label>
                                <textarea class="form-control larger-textarea" id="potential_impact" placeholder="Write Potential Impact" rows="6" cols="60"></textarea>
                                <div class="col-sm-3">
                                  <div class="error-message" id="potential_impact_error"></div>
                                </div>
                            </div>
                            <div class="input-group mb-3"> 
                                <label class="input-group-text col-sm-3" for="potential_impact"><strong>Mitigation Plan</strong></label>
                                <textarea class="form-control larger-textarea" id="mitigation" placeholder="Write Mitigation Plan" rows="6" cols="60"></textarea>
                                <div class="col-sm-3">
                                  <div class="error-message" id="mitigation_error"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label input-group-text" for="type_of_ownership"><strong>Where did you get information about EIC?</strong></label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <select class="form-select" id="where_info">
                                            <option selected>Choose</option>
                                            <option value="EIC">Ethiopian Investment Commission</option>
                                            <option value="EEA">Ethiopian Embassy Abroad</option>
                                            <option value="EM">Investment Mission</option>
                                            <option value="branch">Domestic Business Partner</option>
                                            <option value="AW">Agency website</option>
                                            <option value="EM">Investment Mission</option>
                                            <option value="SM">Social Media</option>
                                            <option value="OS">Other Source</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="error-message" id="where_info_error"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="fileInput" class="col-sm-3 col-form-label"><strong>Attach Investment File</strong></label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="fileInput" name="fileInput">
                                    </div>
                                    <div class="col-sm-3">
                                       <div class="error-message" id="file_input_error"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <hr>

                            <div class="d-flex justify-content-center gap-3">
                                <button type="button" class="btn btn-success" onclick="showTab(currentTab - 1)">Previous</button>
                                <button type="button" class="btn btn-success" onclick="submitAllForms()">Submit</button>
                            </div>
                    </form>             
                </div>
        </div>
</div>

<!-- Hidden modal for success and error messages -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="messageModalBody">
                <!-- Message content will be inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        // When a region is selected, update the zones dropdown
        $('#business_region').on('change', function () {
            var selectedRegion = $(this).val();
            if (selectedRegion !== '') {
                $.ajax({
                    url: '/get-zones/' + selectedRegion, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#business_zone').empty(); // Clear existing options
                        $('#business_zone').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#business_zone').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#business_zone').html('<option value="">choose</option>');
                $('#business_woreda').html('<option value="">choose</option>');
            }
        });
        $('#business_zone').on('change', function () {
            var selectedZone = $(this).val();
            if (selectedZone !== '') {
                $.ajax({
                    url: '/get-woredas/' + selectedZone, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#business_woreda').empty(); // Clear existing options
                        $('#business_woreda').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#business_woreda').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#business_woreda').html('<option value="">choose</option>');
            }
        });
   

    // INVESTMENT LOCATION
    $('#investment_region').on('change', function () {
            var selectedRegion = $(this).val();
            if (selectedRegion !== '') {
                $.ajax({
                    url: '/get-zones/' + selectedRegion, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#investment_zone').empty(); // Clear existing options
                        $('#investment_zone').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#investment_zone').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#investment_zone').html('<option value="">choose</option>');
                $('#investment_woreda').html('<option value="">choose</option>');
            }
        });
        $('#investment_zone').on('change', function () {
            var selectedZone = $(this).val();
            if (selectedZone !== '') {
                $.ajax({
                    url: '/get-woredas/' + selectedZone, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#investment_woreda').empty(); // Clear existing options
                        $('#investment_woreda').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#investment_woreda').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#investment_woreda').html('<option value="">choose</option>');
            }
        });

    });
    // Java scrypt to add Investment Activity
    let fieldCounter = 1; // To keep track of added fields
    document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('textFieldsContainer');
            const addButton = document.getElementById('addFieldButton');
            event.preventDefault();
            addButton.addEventListener('click', function() {
                event.preventDefault();
                const fieldDiv = document.createElement('div');
                fieldDiv.classList.add('mb-3', 'row');

                const label = document.createElement('label');
                label.classList.add('input-group-text', 'col-sm-2', 'col-form-label');
                label.setAttribute('for', 'activity' + fieldCounter);
                label.innerHTML = '<strong>Activity ' + fieldCounter + '</strong>';

                const fieldDiv2 = document.createElement('div');
                fieldDiv2.classList.add('col-sm-3');

                const inputField = document.createElement('input');
                inputField.type = 'text';
                inputField.classList.add('form-control');
                inputField.id = 'activity' + fieldCounter;
                inputField.placeholder = 'Enter Activity ' + fieldCounter;
                inputField.required = false;

                const radioDiv = document.createElement('div');
                radioDiv.classList.add('col-sm-2');

                const radioMajor = document.createElement('input');
                radioMajor.type = 'radio';
                radioMajor.name = 'activityType' + fieldCounter;
                radioMajor.id = 'major' + fieldCounter;
                radioMajor.value = '1';

                const labelMajor = document.createElement('label');
                labelMajor.textContent = 'Major';
                labelMajor.setAttribute('for', 'major' + fieldCounter);

                const radioMinor = document.createElement('input');
                radioMinor.type = 'radio';
                radioMinor.name = 'activityType' + fieldCounter;
                radioMinor.id = 'minor' + fieldCounter;
                radioMinor.value = '0';
                radioMajor.checked = true;

                const labelMinor = document.createElement('label');
                labelMinor.textContent = 'Minor';
                labelMinor.setAttribute('for', 'minor' + fieldCounter);

                const errorDiv = document.createElement('div');
                errorDiv.classList.add('col-sm-2');
                const errorDivinner = document.createElement('div');
                errorDivinner.classList.add('error-message');
                errorDivinner.id = 'activity' + fieldCounter + '_error';

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.classList.add('btn', 'btn-danger', 'col-sm-1', 'remove-button');
                removeButton.textContent = 'Remove';
                removeButton.style.padding = '0.2rem 0.5rem';

                fieldDiv.appendChild(label);
                fieldDiv.appendChild(fieldDiv2);
                fieldDiv2.appendChild(inputField);
                fieldDiv.appendChild(radioDiv);
                radioDiv.appendChild(radioMajor);
                radioDiv.appendChild(labelMajor);
                //radioDiv.appendChild(document.createElement('br'));
                radioDiv.appendChild(document.createTextNode('\u00A0'));
                radioDiv.appendChild(document.createTextNode('\u00A0'));
                radioDiv.appendChild(document.createTextNode('\u00A0'));
                radioDiv.appendChild(radioMinor);
                radioDiv.appendChild(labelMinor);
                fieldDiv.appendChild(errorDiv);
                errorDiv.appendChild(errorDivinner);
                fieldDiv.appendChild(removeButton);

                container.appendChild(fieldDiv);

                container.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-button')) {
                        const fieldDiv = event.target.parentNode;
                        container.removeChild(fieldDiv);
                    }
                });

                fieldCounter++;
            });
        });
        function showSuccessMessage(message) {
        $('#messageModalLabel').text('Success');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }

    // Function to show error message in the modal
    function showErrorMessage(message) {
        $('#messageModalLabel').text('Error');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }

    function resetForms() {
            const formIds = ['tab1_form', 'tab2_form', 'tab3_form', 'tab4_form', 'tab5_form', 'tab6_form','tab7_form'];

            formIds.forEach(formId => {
                const form = document.getElementById(formId);
                if (form) {
                    form.reset();
                }
            });
        }   
</script>


@endsection
