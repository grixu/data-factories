# Changelog

All notable changes to `data-factories` will be documented in this file

## 2.0.0 - 2022-07-24

- BREAKING CHANGES: compatibility only with PHP 8.0 & Laravel 9.0

## 1.2.2 - 2021-11-18

- Fixed auto-merge

## 1.2.1 - 2021-11-18

- Fixed auto-merging on dependabot's updates
- `commit-msg` regex updated
- Fixed names of jobs & slack notifications in pipelines

## 1.2.0 - 2021-11-17

- Added `composer-git-hooks`
- Configured hooks with auto-install/update
- Added timeouts in pipelines
- Added  auto-merge pipeline for small updates made by dependabot
- Added `x-ray`
- Added `x-ray` checking in CI pipeline
- Added `x-ray` checking in git hooks
- Added `changelog-updater-action` to CD pipeline

## 1.1.1 - 2021-11-08

- Updated Larastan to `1.0.1`

## 1.1.0 - 2021-10-28

- Added code quality tools such as PHP_CS_Fixer, PHP Insights & PHPStan
- Added scanning & formatting code with those tools in CI pipeline
- Applied formatting on code base

## 1.0.2 - 2021-01-20

- Updated to compatibility with PHP 8

## 1.0.1 - 2021-01-18

- Removed unnecessary requirements

## 1.0.0 - 2021-01-18

- initial release
