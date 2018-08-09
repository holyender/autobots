report({
  "testSuite": "BackstopJS",
  "tests": [
    {
      "pair": {
        "reference": "../bitmaps_reference/backstop_default_visit-museum-1_0_document_0_compscreen.png",
        "test": "../bitmaps_test/20180809-150144/backstop_default_visit-museum-1_0_document_0_compscreen.png",
        "selector": "document",
        "fileName": "backstop_default_visit-museum-1_0_document_0_compscreen.png",
        "label": "visit-museum-1",
        "requireSameDimensions": true,
        "misMatchThreshold": 0.1,
        "url": "https://nineelevenmemorialstg.prod.acquia-sites.com/visit-museum-1",
        "referenceUrl": "",
        "expect": 0,
        "viewportLabel": "compscreen",
        "diff": {
          "isSameDimensions": true,
          "dimensionDifference": {
            "width": 0,
            "height": 0
          },
          "misMatchPercentage": "0.00"
        }
      },
      "status": "pass"
    }
  ],
  "id": "backstop_default"
});