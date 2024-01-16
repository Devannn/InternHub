<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>
    <!-- Include Bootstrap CSS here if not already included -->
    <!-- <link rel="stylesheet" href="path/to/bootstrap.css"> -->
</head>

<body>

    <div id="companies-container" class="row">
        <!-- Companies will be dynamically added here -->
    </div>

    <script>
        // JSON data from the API
        var jsonData = [{
                "Company_ID": 1,
                "Company_Name": "Test company 1",
                "Company_Province": null,
                "Company_Rating": 0.0,
                "Company_ReviewCount": 0,
                "Company_LogoFilePath": null,
                "Company_Categories": [{
                    "Category_ID": 1,
                    "Category_Name": "test1"
                }],
                "Company_Tags": [{
                        "Tag_ID": 1,
                        "Tag_Name": "test1"
                    },
                    {
                        "Tag_ID": 2,
                        "Tag_Name": "test2"
                    }
                ]
            },
            {
                "Company_ID": 3,
                "Company_Name": "Test company 3",
                "Company_Province": null,
                "Company_Rating": 0.0,
                "Company_ReviewCount": 0,
                "Company_LogoFilePath": null,
                "Company_Categories": [{
                    "Category_ID": 1,
                    "Category_Name": "test1"
                }],
                "Company_Tags": [{
                        "Tag_ID": 1,
                        "Tag_Name": "test1"
                    },
                    {
                        "Tag_ID": 2,
                        "Tag_Name": "test2"
                    }
                ]
            }
        ];

        // Function to create HTML for each company
        function createCompanyHTML(company) {
            return `
        <div class="col-md-6 order-md-2 overflow-auto col-companies">
            <div class="card companies-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="companies-image">
                                <img src="${company.Company_LogoFilePath || 'img/default-logo.png'}" alt="${company.Company_Name}">
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
        </div>
    `;
        }

        // Populate companies-container with HTML
        var companiesContainer = document.getElementById('companies-container');
        jsonData.forEach(company => {
            companiesContainer.innerHTML += createCompanyHTML(company);
        });
    </script>

</body>

</html>