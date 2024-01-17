// Function to create HTML for each company
function createCompanyHTML(company) {
    return `
    <div class="card companies-card">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="${company.Company_LogoFilePath || 'img/pfp/default.png'}" alt="${company.Company_Name}">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">${company.Company_Name}</div>
                        <div class="col text-bold d-flex justify-content-end">${company.Company_Province || 'N/A'}</div>
                    </div>
                    <div class="row">
                        <div class="col">${company.Company_Categories.map(category => category.Category_Name).join(', ')}</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">${company.Company_Rating.toFixed(1)}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="row flex-nowrap overflow-auto">
                ${company.Company_Tags.map(tag => `<div class="tag d-inline-block">${tag.Tag_Name}</div>`).join('')}
            </div>
            <div class="companies-text-right col-text-small">
                ${new Date().toLocaleDateString()}
            </div>
        </div>
    </div>
    `;
}

// Function to generate HTML for all companies
function generateCompanyHTML(data) {
    var companiesContainer = document.getElementById('companies-container');
    data.forEach(company => {
        companiesContainer.innerHTML += createCompanyHTML(company);
    });
}