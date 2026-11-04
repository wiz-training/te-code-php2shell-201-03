# telemetry-ingest — AeroPulse Technologies

Fleet telemetry ingest service for the Wiz Code lab. Slot 03 of the te-code-labs pool; the lab
resets this repository after each session.

- `backend/export_handler.php` — the export endpoint a developer is extending. `main` holds the stub;
  the lab stages the developer's `shell_exec` change (CWE-78) in the working tree so the commit, and
  the pull request's diff, carry it.
- `tools/exploit_sim/harness.php` — a deliberate command-execution harness used to validate egress
  rules; it trips the same SAST rules and is the subject of the repository's `.wiz` exception.
- `.pre-commit-config.yaml` — the local Wiz CLI guardrail: `wizcli scan dir` under the tenant's
  `PHP SAST BLOCK` policy, tagged with the lab session.
