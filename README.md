# action-php-template

Template for GitHub action by php.

## Init Template

- please replace `action-php-template` to your project name.

### Example Workflow

Create a workflow (eg: `.github/workflows/my-action.yml` see [Creating a Workflow file](https://help.github.com/en/articles/configuring-a-workflow#creating-a-workflow-file)) to utilize the labeler action with content:

```yml
name: "Pull Request Labeler"
on:
- pull_request
jobs:
  labels:
    runs-on: ubuntu-latest
    steps:
    - uses: hi-actions/action-php-template@main
      env:
          GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
          LABEL_CONFIG: .github/labeler.yml # this is default
```

_Note: This grants access to the `GITHUB_TOKEN` so the action can make calls to GitHub's rest API_

